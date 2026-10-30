<?php
/**
 * Title: Hero with rotating reviews
 * Slug: villabate/hero
 * Categories: villabate
 * Description: Headline, two buttons, quick facts and reviews that fade one into the next. Add or edit quotes inside the "vb-rotator" group; each Quote block becomes one slide.
 */
?>
<!-- wp:group {"tagName":"section","className":"vb-section vb-hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group vb-section vb-hero"><!-- wp:columns {"className":"vb-hero__cols"} -->
<div class="wp-block-columns vb-hero__cols"><!-- wp:column {"className":"vb-hero__text"} -->
<div class="wp-block-column vb-hero__text"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">Benvenuti</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">The taste of <em>Sicily</em> in the heart of Brooklyn.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-lede"} -->
<p class="vb-lede">We’ve been baking Sicilian pastry on 18th Avenue every morning since 1979.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"vb-shop-link"} -->
<div class="wp-block-button vb-shop-link"><a class="wp-block-button__link wp-element-button" href="<?php echo villabate_page_url( 'shop' ); ?>">Ship a box</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo villabate_page_url( 'custom-cakes' ); ?>">Order a custom cake</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"vb-stats","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group vb-stats"><!-- wp:paragraph -->
<p><strong>1979</strong>Est. in Brooklyn</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>4.6 ★</strong>2,600+ Google reviews</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>50 states</strong>Shipping</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vb-rotator","layout":{"type":"default"}} -->
<div class="wp-block-group vb-rotator"><!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>This is the best cannoli I have ever eaten.</p>
<!-- /wp:paragraph --><cite>Arthur Z. · Google</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>Kind of mind-blowing.</p>
<!-- /wp:paragraph --><cite>The Infatuation</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>If you come to NYC and only visit one bakery, make this it.</p>
<!-- /wp:paragraph --><cite>Jason B. · Google</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>Feels like stepping inside a Christmas ornament.</p>
<!-- /wp:paragraph --><cite>Brooklyn Magazine</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>The most authentic pasticceria I found outside of Sicily.</p>
<!-- /wp:paragraph --><cite>Joseph P. · Google</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>One of the best gelato that I’ve ever tried.</p>
<!-- /wp:paragraph --><cite>Elena S. · Google</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote {"className":"vb-rq"} -->
<blockquote class="wp-block-quote vb-rq"><!-- wp:paragraph -->
<p>The prettiest pastries this side of Palermo.</p>
<!-- /wp:paragraph --><cite>Brooklyn Eagle</cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"vb-hero__media"} -->
<div class="wp-block-column vb-hero__media"><!-- wp:group {"className":"vb-tile-panel","layout":{"type":"default"}} -->
<div class="wp-block-group vb-tile-panel"><!-- wp:image {"className":"vb-hero__main vb-arch"} -->
<figure class="wp-block-image vb-hero__main vb-arch"><img src="<?php echo villabate_img( 'hero-cannoli.jpg' ); ?>" alt="A filled cannoli held up in front of the Villabate Alba storefront"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"vb-hero__top vb-arch"} -->
<figure class="wp-block-image vb-hero__top vb-arch"><img src="<?php echo villabate_img( 'interior-ceiling.jpg' ); ?>" alt="Inside the bakery under the painted ceiling, with Italian flags and the pastry cases"/></figure>
<!-- /wp:image -->

<!-- wp:image {"className":"vb-hero__bottom"} -->
<figure class="wp-block-image vb-hero__bottom"><img src="<?php echo villabate_img( 'inside-wide.jpg' ); ?>" alt="Wide view of the bakery interior under its frescoed ceiling"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
