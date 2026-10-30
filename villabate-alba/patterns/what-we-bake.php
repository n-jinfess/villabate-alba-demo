<?php
/**
 * Title: What we bake
 * Slug: villabate/what-we-bake
 * Categories: villabate
 * Description: Four arched category cards: cakes, pastries, breads, gelato.
 */
$villabate_cats = array(
	array( 'cakes.jpg', 'Cakes', 'Custom & classic', 'Decorated by hand, in the flavors you grew up with.', '#cakes' ),
	array( 'pastries.jpg', 'Pastries & cookies', 'Ships', 'Cannoli, sfogliatelle and cookies by the pound.', '#shop' ),
	array( 'breads.jpg', 'Breads', 'Daily', 'Semolina loaves, out of the oven every morning.', '#menu' ),
	array( 'gelato.jpg', 'Gelato', 'In store', 'Made here, with Elenka flavors from Italy.', '#menu' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"menu","className":"vb-section vb-bake","layout":{"type":"constrained"}} -->
<section id="menu" class="wp-block-group vb-section vb-bake"><!-- wp:paragraph {"align":"center","className":"vb-script"} -->
<p class="has-text-align-center vb-script">i nostri dolci</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">What we bake</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"vb-card-grid","layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group vb-card-grid"><?php foreach ( $villabate_cats as $villabate_cat ) : ?><!-- wp:group {"className":"vb-cat","layout":{"type":"default"}} -->
<div class="wp-block-group vb-cat"><!-- wp:image {"linkDestination":"custom","className":"vb-arch vb-arch--framed"} -->
<figure class="wp-block-image vb-arch vb-arch--framed"><img src="<?php echo villabate_img( $villabate_cat[0] ); ?>" alt="<?php echo esc_attr( $villabate_cat[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_cat[1] ); ?> <span class="vb-tag"><?php echo esc_html( $villabate_cat[2] ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted"><?php echo esc_html( $villabate_cat[3] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
