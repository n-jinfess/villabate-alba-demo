<?php
/**
 * Title: Header (tricolore, announcement, logo, menu, awning)
 * Slug: villabate/header
 * Categories: villabate, header
 * Block Types: core/template-part/header
 * Description: Site header with the flag stripe, announcement bar, majolica tile band, merged logo, menu and striped awning.
 */
?>
<!-- wp:group {"className":"vb-topbar","layout":{"type":"default"}} -->
<div class="wp-block-group vb-topbar"><!-- wp:html -->
<div class="vb-tricolore" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"className":"vb-seasonbar","layout":{"type":"default"}} -->
<div class="wp-block-group vb-seasonbar"><!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-fall"} -->
<p class="vb-seasonbar__msg vb-only-fall"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'season-thanksgiving.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Thanksgiving</span> Thanksgiving orders are open. <span class="vb-seasonbar__sub">Turkey cakes, pies and cookie trays. Pick up by Wednesday, Nov 25.</span> <a href="<?php echo villabate_page_url( 'shop', 'holiday' ); ?>">Order ahead →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-christmas"} -->
<p class="vb-seasonbar__msg vb-only-christmas"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'feast-gingerbread-house.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Christmas Eve</span> Christmas Eve orders are open. <span class="vb-seasonbar__sub">Skip the line on the 24th. Pick a time and we’ll have it ready.</span> <a href="<?php echo villabate_page_url( 'shop', 'holiday' ); ?>">Order ahead →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-spring"} -->
<p class="vb-seasonbar__msg vb-only-spring"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'feast-easter-egg.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Easter</span> Easter orders are open. <span class="vb-seasonbar__sub">Chocolate eggs, cassata, and sfince for St. Joseph’s Day.</span> <a href="<?php echo villabate_page_url( 'shop', 'holiday' ); ?>">Order ahead →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-mothers"} -->
<p class="vb-seasonbar__msg vb-only-mothers"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'season-mothers-day.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Mother’s Day</span> Mother’s Day orders are open. <span class="vb-seasonbar__sub">Heart cookies and cakes for Mom. Order ahead and pick up Sunday.</span> <a href="<?php echo villabate_page_url( 'custom-cakes' ); ?>">Order ahead →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-fathers"} -->
<p class="vb-seasonbar__msg vb-only-fathers"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'season-fathers-day.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Father’s Day</span> Father’s Day cakes. <span class="vb-seasonbar__sub">Tell us what Dad’s into and we’ll put it on a cake.</span> <a href="<?php echo villabate_page_url( 'custom-cakes' ); ?>">Order a cake →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-seasonbar__msg vb-only-summer"} -->
<p class="vb-seasonbar__msg vb-only-summer"><img class="vb-seasonbar__img" src="<?php echo villabate_img( 'must-brioche.jpg' ); ?>" alt="" width="64" height="64"/><span class="vb-seasonbar__text"><span class="vb-seasonbar__tag">Gelato season</span> Gelato season. <span class="vb-seasonbar__sub">Brioche con gelato every day. Cannoli contest in August.</span> <a href="<?php echo villabate_home_url( 'contest' ); ?>">See the contest →</a></span></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<button type="button" class="vb-seasonbar__close" aria-label="Dismiss"><svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M6 6l12 12M18 6L6 18"/></svg></button>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="vb-tiles" aria-hidden="true"></div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vb-header","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vb-header"><!-- wp:image {"linkDestination":"custom","className":"vb-logo"} -->
<figure class="wp-block-image vb-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo villabate_img( 'logo-lockup.png' ); ?>" alt="Villabate Alba, Pasticceria Gelateria"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"overlayMenu":"mobile","className":"vb-nav","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Custom cakes","url":"<?php echo villabate_page_url( 'custom-cakes' ); ?>","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Our story","url":"<?php echo villabate_home_url( 'story' ); ?>","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Visit","url":"<?php echo villabate_home_url( 'visit' ); ?>","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons {"className":"vb-header__cta"} -->
<div class="wp-block-buttons vb-header__cta"><!-- wp:button {"className":"vb-shop-link"} -->
<div class="wp-block-button vb-shop-link"><a class="wp-block-button__link wp-element-button" href="<?php echo villabate_page_url( 'shop' ); ?>">Order online</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="vb-awning" aria-hidden="true"></div>
<!-- /wp:html -->
