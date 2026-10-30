/**
 * Villabate Alba: seasons, seasonal slide-in card, seasonal shop and rotating reviews.
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
		var close = bar.querySelector( '.vb-seasonbar__close' );
		if ( close ) { close.addEventListener( 'click', dismissBar ); }
		if ( ! bar.hidden ) { window.addEventListener( 'scroll', dismissBar, { passive: true, once: true } ); }
	}

	/* Seasonal shop */
	var grid = document.querySelector( '.vb-shop-grid' );
	if ( grid ) {
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
				if ( visible && filter === 'season' && shown >= 8 ) { visible = false; }
				if ( visible ) { shown++; }
				el.classList.toggle( 'vb-is-hidden', ! visible );
			} );
		};

		var chips = Array.prototype.slice.call( document.querySelectorAll( '.vb-chip' ) );
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

		/* Any link to #shop (menu, header button, hero) opens the shop sorted for the season */
		var seasonChip = chips.filter( function ( c ) { return c.getAttribute( 'data-filter' ) === 'season'; } )[ 0 ];
		document.querySelectorAll( 'a[href="#shop"]' ).forEach( function ( a ) {
			a.addEventListener( 'click', function () { if ( seasonChip ) { pick( seasonChip ); } } );
		} );
	}

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
		var start = function () { timer = window.setInterval( function () { current = ( current + 1 ) % quotes.length; show( current ); }, reduce ? 9000 : 5500 ); };
		var stop = function () { window.clearInterval( timer ); };
		box.addEventListener( 'mouseenter', stop );
		box.addEventListener( 'mouseleave', start );
		box.addEventListener( 'focusin', stop );
		box.addEventListener( 'focusout', start );
		start();
	} );
}() );
