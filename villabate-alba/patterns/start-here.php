<?php
/**
 * Title: First visit, start here
 * Slug: villabate/start-here
 * Categories: villabate
 * Description: Six must-try items in round photo frames. Add the class vb-badge-ships or vb-badge-store to an item to show its badge.
 */
$villabate_items = array(
	array( 'must-cannoli.jpg', 'Cannoli', 'We fill them when you order, with sheep’s milk ricotta from Sicily.', 'store' ),
	array( 'must-pistachio.jpg', 'Pistachio cookie', 'Very green and very pistachio.', 'ships' ),
	array( 'must-lobster-tail.jpg', 'Lobster tail', 'Flaky, full of cream, not too sweet.', 'store' ),
	array( 'must-sfogliatelle.jpg', 'Sfogliatelle', 'Crisp layers with ricotta inside. We ship them frozen.', 'ships' ),
	array( 'must-brioche.jpg', 'Brioche con gelato', 'Gelato in a brioche bun, the way they eat it in Sicily.', 'store' ),
	array( 'must-cartocci.jpg', 'Cartocci', 'Fried dough, rolled in sugar, filled with ricotta.', 'store' ),
);
?>
<!-- wp:group {"tagName":"section","className":"vb-section vb-start","layout":{"type":"constrained"}} -->
<section class="wp-block-group vb-section vb-start"><!-- wp:group {"className":"vb-framed","layout":{"type":"default"}} -->
<div class="wp-block-group vb-framed"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">Prima volta?</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">First visit? Start here.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted">Thirty kinds of cookies and a full pastry case can be a lot. If it’s your first time, start with these.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-must-grid","layout":{"type":"grid","minimumColumnWidth":"160px"}} -->
<div class="wp-block-group vb-must-grid"><?php foreach ( $villabate_items as $villabate_item ) : ?><!-- wp:group {"className":"vb-must vb-badge-<?php echo esc_attr( $villabate_item[3] ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-must vb-badge-<?php echo esc_attr( $villabate_item[3] ); ?>"><!-- wp:image {"className":"vb-round"} -->
<figure class="wp-block-image vb-round"><img src="<?php echo villabate_img( $villabate_item[0] ); ?>" alt="<?php echo esc_attr( $villabate_item[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_item[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $villabate_item[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
