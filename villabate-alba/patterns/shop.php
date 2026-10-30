<?php
/**
 * Title: Shop (sorted by season)
 * Slug: villabate/shop
 * Categories: villabate
 * Description: Product cards that sort themselves by season. On each product card, add classes to its group: vb-in-fall, vb-in-christmas, vb-in-spring, vb-in-mothers, vb-in-fathers, vb-in-summer (in season) and vb-cat-cookies, vb-cat-pastry, vb-cat-marzipan, vb-cat-trays (filter). Seasonal specials use vb-only-SEASON so they appear only in that season. Point each Add button at the product page in the online store.
 */
$villabate_specials = array(
	array( 'fall', 'season-thanksgiving.jpg', 'Thanksgiving turkey cake', 'Pickup only · pre-order' ),
	array( 'christmas', 'season-christmas.jpg', 'Christmas pastry tray', 'Pickup only · pre-order' ),
	array( 'spring', 'season-easter.jpg', 'Chocolate Easter egg', 'Handmade · in store and pickup' ),
	array( 'mothers', 'season-mothers-day.jpg', 'Mother’s Day heart cookies', 'In store and pickup' ),
	array( 'fathers', 'season-fathers-day.jpg', 'Father’s Day custom cake', 'Pickup only · pre-order' ),
	array( 'summer', 'must-brioche.jpg', 'Brioche con gelato', 'In store daily' ),
);
$villabate_products = array(
	array( 'shop-rainbow.jpg', 'Rainbow Cookie', 'Cookies', '$29.99', 'vb-in-christmas vb-cat-cookies' ),
	array( 'shop-pignoli.jpg', 'Pignoli', 'Cookies', '$65.00', 'vb-in-fall vb-in-christmas vb-cat-cookies' ),
	array( 'must-pistachio.jpg', 'Pistachio Flavored Almond Cookie', 'Cookies', '$29.99', 'vb-in-christmas vb-in-mothers vb-cat-cookies' ),
	array( 'shop-marzipan.jpg', 'Marzipan or Frutta Martorana', 'Marzipan', '$39.99', 'vb-in-fall vb-in-christmas vb-cat-marzipan' ),
	array( 'shop-cookie-tray.jpg', 'Cookie Tray', 'Assorted', '$60.00', 'vb-in-fall vb-in-christmas vb-in-spring vb-in-mothers vb-in-fathers vb-cat-trays' ),
	array( 'must-sfogliatelle.jpg', 'Sfogliatelle', 'Frozen 6-pack · bake at home · next-day air', '$39.99', 'vb-in-spring vb-in-fathers vb-in-summer vb-cat-pastry' ),
	array( 'shop-amaretti.jpg', 'Amaretti', 'Cookies', '$28.99', 'vb-in-spring vb-in-christmas vb-cat-cookies' ),
	array( 'shop-almond-s.jpg', 'Almond S Cookie', 'Cookies · 1 lb', '$14.00', 'vb-in-spring vb-in-summer vb-cat-cookies' ),
);
$villabate_notes = array(
	'fall'      => 'Thanksgiving is close, so the turkey cake and trays for the table are up front.',
	'christmas' => 'Christmas is coming. Cookie trays, pignoli and rainbow cookies are up front.',
	'spring'    => 'Easter’s on the way. Chocolate eggs and gift trays are up front.',
	'mothers'   => 'For Mother’s Day, the heart cookies and trays are up front.',
	'fathers'   => 'For Father’s Day, the cakes and sfogliatelle are up front.',
	'summer'    => 'It’s summer, so gelato and the lighter cookies are up front.',
);
?>
<!-- wp:group {"tagName":"section","anchor":"shop","className":"vb-section vb-shop","layout":{"type":"constrained"}} -->
<section id="shop" class="wp-block-group vb-section vb-shop"><!-- wp:group {"className":"vb-shop__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group vb-shop__head"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">We ship every Tuesday and Wednesday</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cose dolci per <em>casa</em></h2>
<!-- /wp:heading -->
<?php foreach ( $villabate_notes as $villabate_season => $villabate_note ) : ?>
<!-- wp:paragraph {"className":"vb-muted vb-only-<?php echo esc_attr( $villabate_season ); ?>"} -->
<p class="vb-muted vb-only-<?php echo esc_attr( $villabate_season ); ?>"><?php echo esc_html( $villabate_note ); ?></p>
<!-- /wp:paragraph -->
<?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="vb-chips" role="group" aria-label="Filter products">
  <button type="button" class="vb-chip is-active" data-filter="season">In season</button>
  <button type="button" class="vb-chip" data-filter="all">All</button>
  <button type="button" class="vb-chip" data-filter="cookies">Cookies</button>
  <button type="button" class="vb-chip" data-filter="pastry">Pastry</button>
  <button type="button" class="vb-chip" data-filter="marzipan">Marzipan</button>
  <button type="button" class="vb-chip" data-filter="trays">Gift trays</button>
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vb-shop-grid","layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group vb-shop-grid"><?php foreach ( $villabate_specials as $villabate_sp ) : ?><!-- wp:group {"className":"vb-product vb-product--feature vb-only-<?php echo esc_attr( $villabate_sp[0] ); ?> vb-in-<?php echo esc_attr( $villabate_sp[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-product vb-product--feature vb-only-<?php echo esc_attr( $villabate_sp[0] ); ?> vb-in-<?php echo esc_attr( $villabate_sp[0] ); ?>"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_sp[1] ); ?>" alt="<?php echo esc_attr( $villabate_sp[2] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_sp[2] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted"><?php echo esc_html( $villabate_sp[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-product__buy","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group vb-product__buy"><!-- wp:paragraph {"className":"vb-price"} -->
<p class="vb-price">[PRICE]</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#holiday">Pre-order</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><?php endforeach; ?><?php foreach ( $villabate_products as $villabate_p ) : ?><!-- wp:group {"className":"vb-product <?php echo esc_attr( $villabate_p[4] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-product <?php echo esc_attr( $villabate_p[4] ); ?>"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_p[0] ); ?>" alt="<?php echo esc_attr( $villabate_p[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_p[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted"><?php echo esc_html( $villabate_p[2] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-product__buy","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group vb-product__buy"><!-- wp:paragraph {"className":"vb-price"} -->
<p class="vb-price"><?php echo esc_html( $villabate_p[3] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Add</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
