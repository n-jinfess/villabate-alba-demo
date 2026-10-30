<?php
/**
 * Title: Instagram feed
 * Slug: villabate/instagram
 * Categories: villabate
 * Description: Intro plus a 3x3 photo grid. Once an Instagram feed plugin is installed (for example Smash Balloon Instagram Feed), replace the vb-ig-grid group with the plugin's block so the latest posts load on their own.
 */
$villabate_posts = array(
	array( 'inside-espresso.jpg', 'Espresso and a cannoli on the marble bar' ),
	array( 'ig-1.jpg', 'A green Frankenstein Halloween cake' ),
	array( 'ig-2.jpg', 'A platter of rainbow cookies' ),
	array( 'knicks-cannoli.jpg', 'Knicks cannoli in orange and blue, with the New York Villabate Alba tee' ),
	array( 'ig-3.jpg', 'Two customers sharing a cannoli at the pastry case' ),
	array( 'savory-pizzette.jpg', 'A tray of savory pizzette and filled rolls' ),
	array( 'ig-6.jpg', 'A platter of cannoli dusted with powdered sugar' ),
	array( 'season-fathers-day.jpg', 'A Father’s Day cake decorated as a suit and tie' ),
	array( 'ig-5.jpg', 'Siciliano gelato in the case' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"gallery","className":"vb-section vb-instagram","layout":{"type":"constrained"}} -->
<section id="gallery" class="wp-block-group vb-section vb-instagram"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">seguici</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Follow along on Instagram.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted">We post new cakes, holiday stuff and whatever just came out of the oven.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.instagram.com/villabatealba/">Follow @villabatealba</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"vb-ig-grid","layout":{"type":"grid","columnCount":3}} -->
<div class="wp-block-group vb-ig-grid"><?php foreach ( $villabate_posts as $villabate_post ) : ?><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo villabate_img( $villabate_post[0] ); ?>" alt="<?php echo esc_attr( $villabate_post[1] ); ?>"/></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
