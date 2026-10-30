<?php
/**
 * Title: Merch (la bottega)
 * Slug: villabate/merch
 * Categories: villabate
 * Description: Carretto and storefront apparel with one button to the Villabate Alba collection on Neighborhood Spot (VILLABATE_MERCH_STORE in functions.php).
 */
$villabate_merch = villabate_merch_items();
?>
<!-- wp:group {"tagName":"section","anchor":"la-bottega","className":"vb-section vb-merch","layout":{"type":"constrained"}} -->
<section id="la-bottega" class="wp-block-group vb-section vb-merch"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">la bottega</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Take a piece of 18th Avenue home.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted">Our tees and hoodies have the Sicilian carretto on the back. That’s the painted donkey cart from back home.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( VILLABATE_MERCH_STORE ); ?>">Shop merch ↗</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"vb-merch-note"} -->
<p class="vb-merch-note">Sold online through Neighborhood Spot.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"vb-merch-grid","layout":{"type":"grid","minimumColumnWidth":"170px"}} -->
<div class="wp-block-group vb-merch-grid"><?php foreach ( $villabate_merch as $villabate_m ) : ?><!-- wp:group {"className":"vb-product","layout":{"type":"default"}} -->
<div class="wp-block-group vb-product"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_m[0] ); ?>" alt="<?php echo esc_attr( $villabate_m[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_m[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted"><?php echo esc_html( $villabate_m[2] ); ?> · <span class="vb-price"><?php echo esc_html( $villabate_m[3] ); ?></span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
