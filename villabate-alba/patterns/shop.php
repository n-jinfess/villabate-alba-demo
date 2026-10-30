<?php
/**
 * Title: Shop, full (sorted by season)
 * Slug: villabate/shop
 * Categories: villabate
 * Description: Product cards that sort themselves by season. On each product card, add classes to its group: vb-in-fall, vb-in-christmas, vb-in-spring, vb-in-mothers, vb-in-fathers, vb-in-summer (in season) and vb-cat-cookies, vb-cat-pastry, vb-cat-marzipan, vb-cat-trays (filter). Seasonal specials use vb-only-SEASON so they appear only in that season. Point each Add button at the product page in the online store. Used on the Shop page; the homepage uses the Shop teaser. Product data lives in villabate_shop_products() in functions.php.
 */
$villabate_specials = villabate_shop_specials();
$villabate_products = villabate_shop_products();
$villabate_notes    = villabate_shop_notes();
?>
<!-- wp:group {"tagName":"section","anchor":"shop","className":"vb-section vb-shop","layout":{"type":"constrained"}} -->
<section id="shop" class="wp-block-group vb-section vb-shop"><!-- wp:group {"className":"vb-shop__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group vb-shop__head"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">Ships every Tuesday and Wednesday · or pick up on 18th Avenue</p>
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
