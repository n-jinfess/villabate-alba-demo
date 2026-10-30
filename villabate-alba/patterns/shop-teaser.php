<?php
/**
 * Title: Shop teaser (homepage)
 * Slug: villabate/shop-teaser
 * Categories: villabate
 * Description: The homepage sweets section: six first-visit picks, four seasonal picks with prices, and a link to the Shop page. Nothing is bought here; the full shop with filters and Add buttons is the Shop page.
 */
$villabate_specials = villabate_shop_specials();
$villabate_products = villabate_shop_products();
$villabate_notes    = villabate_shop_notes();
$villabate_items    = villabate_must_items();
?>
<!-- wp:group {"tagName":"section","anchor":"shop","className":"vb-section vb-shop vb-shop--teaser","layout":{"type":"constrained"}} -->
<section id="shop" class="wp-block-group vb-section vb-shop vb-shop--teaser"><!-- wp:group {"className":"vb-shop__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
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

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo villabate_page_url( 'shop' ); ?>">Shop all sweets →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"vb-script vb-subhead-script"} -->
<p class="vb-script vb-subhead-script">Prima volta?</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"vb-subhead"} -->
<h3 class="wp-block-heading vb-subhead">First visit? Start with these.</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"vb-must-grid","layout":{"type":"grid","minimumColumnWidth":"150px"}} -->
<div class="wp-block-group vb-must-grid"><?php foreach ( $villabate_items as $villabate_item ) : ?><!-- wp:group {"className":"vb-must vb-badge-<?php echo esc_attr( $villabate_item[3] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-must vb-badge-<?php echo esc_attr( $villabate_item[3] ); ?>"><!-- wp:image {"className":"vb-round"} -->
<figure class="wp-block-image vb-round"><img src="<?php echo villabate_img( $villabate_item[0] ); ?>" alt="<?php echo esc_attr( $villabate_item[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html( $villabate_item[1] ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $villabate_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"vb-subhead"} -->
<h3 class="wp-block-heading vb-subhead">In season now</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"vb-shop-grid vb-shop-grid--teaser","layout":{"type":"grid","minimumColumnWidth":"200px"}} -->
<div class="wp-block-group vb-shop-grid vb-shop-grid--teaser"><?php foreach ( $villabate_specials as $villabate_sp ) : ?><!-- wp:group {"className":"vb-product vb-product--feature vb-only-<?php echo esc_attr( $villabate_sp[0] ); ?> vb-in-<?php echo esc_attr( $villabate_sp[0] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-product vb-product--feature vb-only-<?php echo esc_attr( $villabate_sp[0] ); ?> vb-in-<?php echo esc_attr( $villabate_sp[0] ); ?>"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_sp[1] ); ?>" alt="<?php echo esc_attr( $villabate_sp[2] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_sp[2] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted"><?php echo esc_html( $villabate_sp[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?><?php foreach ( $villabate_products as $villabate_p ) : ?><!-- wp:group {"className":"vb-product <?php echo esc_attr( $villabate_p[4] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-product <?php echo esc_attr( $villabate_p[4] ); ?>"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_p[0] ); ?>" alt="<?php echo esc_attr( $villabate_p[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_p[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-price"} -->
<p class="vb-price"><?php echo esc_html( $villabate_p[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
