/**
 * Villabate Alba: seasons, seasonal slide-in card, seasonal shop and teaser, rotating reviews, slideshows and photo fades.
 *
 * Season dates (edit SEASON_RULES below to change them):
 *   fall (Thanksgiving)  Oct 1 to Nov 26
 *   christmas            Nov 27 to Dec 31
 *   spring (Easter)      Jan 1 to Apr 30
 *   mothers              May 1 to May 12
 *   fathers              May 13 to Jun 21
 *   summer (gelato)      Jun 22 to Sep 30
 * Preview any season by adding ?season=christmas (or fall, spring, mothers, fathers, summer) to the URL.
 */
( function () {
	'use strict';

	var SEASONS = [ 'fall', 'christmas', 'spring', 'mothers', 'fathers', 'summer' ];
	var CHIP_LABELS = {
		fall: 'Thanksgiving picks',
		christmas: 'Christmas picks',
		spring: 'Easter picks',
		mothers: 'Mother’s Day picks',
		fathers: 'Father’s Day picks',
		summer: 'Summer picks'
	};

	function seasonFor( date ) {
		var m = date.getMonth();
		var d = date.getDate();
		if ( m === 9 || ( m === 10 && d <= 26 ) ) { return 'fall'; }
		if ( m >= 10 ) { return 'christmas'; }
		if ( m <= 3 ) { return 'spring'; }
		if ( m === 4 && d <= 12 ) { return 'mothers'; }
		if ( m === 4 || ( m === 5 && d <= 21 ) ) { return 'fathers'; }
		return 'summer';
	}

	var requested = null;
	try { requested = new URLSearchParams( window.location.search ).get( 'season' ); } catch ( e ) {}
	var season = SEASONS.indexOf( requested ) >= 0 ? requested : seasonFor( new Date() );
	document.body.setAttribute( 'data-vb-season', season );

	/* Seasonal slide-in card */
	var bar = document.querySelector( '.vb-seasonbar' );
	if ( bar ) {
		try { if ( window.sessionStorage.getItem( 'vbBarClosed' ) === season ) { bar.hidden = true; } } catch ( e ) {}
		if ( ! bar.hidden ) { window.setTimeout( function () { bar.classList.add( 'is-in' ); }, 1200 ); }
		var dismissBar = function () {
			bar.classList.remove( 'is-in' );
			bar.hidden = true;
			try { window.sessionStorage.setItem( 'vbBarClosed', season ); } catch ( e ) {}
		};
		/* Only the close button dismisses it (remembered for the visit); scrolling leaves it alone */
		var close = bar.querySelector( '.vb-seasonbar__close' );
		if ( close ) { close.addEventListener( 'click', dismissBar ); }
	}

	/* Order menu: close it on Escape or a click anywhere else */
	var orderMenu = document.querySelector( '.vb-order' );
	if ( orderMenu ) {
		document.addEventListener( 'click', function ( e ) { if ( ! orderMenu.contains( e.target ) ) { orderMenu.open = false; } } );
		document.addEventListener( 'keydown', function ( e ) { if ( 'Escape' === e.key && orderMenu.open ) { orderMenu.open = false; orderMenu.querySelector( 'summary' ).focus(); } } );
	}

	/* Seasonal sorting for the homepage sweets teaser (4 cards, season first) */
	document.querySelectorAll( '.vb-shop-grid' ).forEach( function ( grid ) {
		var limit = grid.classList.contains( 'vb-shop-grid--teaser' ) ? 4 : 8;
		var section = grid.closest( '.vb-shop' ) || document;
		var items = Array.prototype.slice.call( grid.querySelectorAll( '.vb-product' ) );
		items.forEach( function ( el, i ) {
			el.setAttribute( 'data-vb-order', i );
			if ( el.classList.contains( 'vb-in-' + season ) ) {
				var badge = document.createElement( 'span' );
				badge.className = 'vb-badge';
				badge.textContent = el.classList.contains( 'vb-product--feature' ) ? 'Seasonal special' : 'In season';
				( el.querySelector( 'figure' ) || el ).appendChild( badge );
			}
		} );

		var rank = function ( el ) {
			if ( el.classList.contains( 'vb-product--feature' ) ) { return 0; }
			return el.classList.contains( 'vb-in-' + season ) ? 1 : 2;
		};
		var order = function ( el ) { return parseInt( el.getAttribute( 'data-vb-order' ), 10 ); };

		var apply = function ( filter ) {
			var list = items.slice().sort( function ( a, b ) {
				return filter === 'season' ? ( rank( a ) - rank( b ) || order( a ) - order( b ) ) : order( a ) - order( b );
			} );
			var shown = 0;
			list.forEach( function ( el ) {
				var feature = el.classList.contains( 'vb-product--feature' );
				var show = filter === 'season' ? true : ( filter === 'all' ? ! feature : el.classList.contains( 'vb-cat-' + filter ) );
				el.classList.toggle( 'vb-hide-badge', filter !== 'season' );
				el.classList.remove( 'vb-is-hidden' );
				grid.appendChild( el );
				var visible = show && window.getComputedStyle( el ).display !== 'none';
				if ( visible && filter === 'season' && shown >= limit ) { visible = false; }
				if ( visible ) { shown++; }
				el.classList.toggle( 'vb-is-hidden', ! visible );
			} );
		};

		var chips = Array.prototype.slice.call( section.querySelectorAll( '.vb-chip' ) );
		var pick = function ( chip ) {
			chips.forEach( function ( c ) { c.classList.remove( 'is-active' ); c.setAttribute( 'aria-pressed', 'false' ); } );
			chip.classList.add( 'is-active' );
			chip.setAttribute( 'aria-pressed', 'true' );
			apply( chip.getAttribute( 'data-filter' ) );
		};
		chips.forEach( function ( chip ) {
			if ( chip.getAttribute( 'data-filter' ) === 'season' ) { chip.textContent = CHIP_LABELS[ season ]; }
			chip.setAttribute( 'aria-pressed', chip.classList.contains( 'is-active' ) ? 'true' : 'false' );
			chip.addEventListener( 'click', function () { pick( chip ); } );
		} );
		apply( 'season' );
	} );

	/* Rotating reviews in the hero */
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	document.querySelectorAll( '.vb-rotator' ).forEach( function ( box ) {
		var quotes = Array.prototype.slice.call( box.querySelectorAll( '.vb-rq' ) );
		if ( quotes.length < 2 ) { return; }
		var dots = document.createElement( 'div' );
		dots.className = 'vb-dots';
		dots.setAttribute( 'aria-hidden', 'true' );
		quotes.forEach( function () { dots.appendChild( document.createElement( 'span' ) ); } );
		box.parentNode.insertBefore( dots, box.nextSibling );
		box.setAttribute( 'aria-live', 'polite' );

		var current = 0;
		var show = function ( n ) {
			quotes.forEach( function ( q, k ) {
				q.classList.toggle( 'is-active', k === n );
				q.setAttribute( 'aria-hidden', k === n ? 'false' : 'true' );
			} );
			Array.prototype.forEach.call( dots.children, function ( d, k ) { d.classList.toggle( 'is-active', k === n ); } );
		};
		box.classList.add( 'is-ready' );
		show( 0 );

		var timer = null;
		var start = function () { timer = window.setInterval( function () { current = ( current + 1 ) % quotes.length; show( current ); }, reduce ? 9000 : 3000 ); };
		var stop = function () { window.clearInterval( timer ); };
		box.addEventListener( 'mouseenter', stop );
		box.addEventListener( 'mouseleave', start );
		box.addEventListener( 'focusin', stop );
		box.addEventListener( 'focusout', start );
		start();
	} );

	/* Custom cakes: the Occasion picked in the form shows that occasion's cake photos */
	var occasions = document.querySelector( '.vb-occasions' );
	var occasionSelect = document.getElementById( 'vb-occasion' );
	if ( occasions && occasionSelect ) {
		var showOccasion = function () {
			Array.prototype.forEach.call( occasions.children, function ( el ) {
				el.classList.toggle( 'is-current', el.classList.contains( 'vb-occasion--' + occasionSelect.value ) );
			} );
		};
		occasions.classList.add( 'is-ready' );
		showOccasion();
		occasionSelect.addEventListener( 'change', showOccasion );
	}

	/* Photo slideshows (the Today step in Our story): cross-fade every few seconds */
	document.querySelectorAll( '.vb-slides' ).forEach( function ( box, n ) {
		var slides = Array.prototype.slice.call( box.querySelectorAll( ':scope > figure' ) );
		if ( slides.length < 2 ) { return; }
		var dots = document.createElement( 'div' );
		dots.className = 'vb-dots';
		dots.setAttribute( 'aria-hidden', 'true' );
		slides.forEach( function () { dots.appendChild( document.createElement( 'span' ) ); } );
		box.appendChild( dots );

		var current = 0;
		var show = function ( n ) {
			slides.forEach( function ( s, k ) {
				s.classList.toggle( 'is-active', k === n );
				s.setAttribute( 'aria-hidden', k === n ? 'false' : 'true' );
			} );
			Array.prototype.forEach.call( dots.children, function ( d, k ) { d.classList.toggle( 'is-active', k === n ); } );
		};
		box.classList.add( 'is-ready' );
		show( 0 );
		/* Each slideshow starts a little later than the one before, so a row of them never flips at once */
		window.setTimeout( function () {
			window.setInterval( function () { current = ( current + 1 ) % slides.length; show( current ); }, reduce ? 9000 : 4000 );
		}, ( n % 6 ) * 700 );
	} );

	/* Photo fade-in: supporting photos only, once, on wide screens. Text, prices, buttons, the shop and
	   the order forms never animate, and anything already on screen at load is left alone. */
	var PHOTOS = '.vb-cat figure, .vb-feast .vb-slides, .vb-timeline__step > figure, .vb-slides, .vb-euro figure, .vb-inside figure, .vb-contest__photos figure, .vb-cakes .vb-arch--framed, .vb-ig-grid figure, .vb-visit .vb-framed-photo';
	var wide = window.matchMedia && window.matchMedia( '(min-width: 782px)' ).matches;
	if ( document.documentElement.classList.contains( 'vb-motion' ) && wide && 'IntersectionObserver' in window ) {
		var io = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					entry.target.classList.add( 'is-in' );
					io.unobserve( entry.target );
				}
			} );
		}, { rootMargin: '0px 0px -5% 0px', threshold: 0.1 } );
		document.querySelectorAll( PHOTOS ).forEach( function ( el ) {
			if ( el.getBoundingClientRect().top < window.innerHeight ) { return; }
			el.classList.add( 'vb-reveal' );
			io.observe( el );
		} );
	}
}() );
