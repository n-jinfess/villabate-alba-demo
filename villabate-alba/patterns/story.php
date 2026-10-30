<?php
/**
 * Title: Our story
 * Slug: villabate/story
 * Categories: villabate
 * Description: Family timeline from Villabate to 18th Avenue, plus the 2021 Euro celebration.
 */
$villabate_steps = array(
	array( 'Villabate, Sicily', 'Angelo Alaimo and his son Emanuele bake bread for the locals in their small Sicilian hometown.', 'sicily-flag.jpg', 'The flag of Sicily: the Trinacria on red and yellow' ),
	array( '1979, Brooklyn', 'After years as breadmakers in bakeries all over Brooklyn, they open Villabate on 18th Avenue.', 'story-bensonhurst.jpg', 'The original Villabate storefront on 18th Avenue in the early days' ),
	array( 'Today', 'Three generations in, Emanuele, Lina, Angela, Emanuele Jr. and Anthony still run it, and give back to the neighborhood that made it.', 'story-today.jpg', 'The Alaimo family and their bakers in blue Villabate Alba shirts behind a table of decorated cakes' ),
	array( 'The owners', 'Angela Alaimo and her daughter, Alessandra Peralta, run the shop today.', 'story-owners.jpg', 'Owners Angela Alaimo and her daughter Alessandra Peralta behind the counter' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"story","className":"vb-section vb-story","layout":{"type":"constrained"}} -->
<section id="story" class="wp-block-group vb-section vb-story"><!-- wp:html -->
<div class="vb-tiles vb-tiles--dark" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">La nostra storia</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">From a bread oven in <em>Villabate</em> to 18th Avenue.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-script vb-script--light"} -->
<p class="vb-script vb-script--light">“Se vai a New York, vai da Villabate.”</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-muted-light"} -->
<p class="vb-muted-light">A saying among Sicilians: if you go to New York, go to Villabate.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-timeline","layout":{"type":"grid","minimumColumnWidth":"230px"}} -->
<div class="wp-block-group vb-timeline"><?php foreach ( $villabate_steps as $villabate_s ) : ?><!-- wp:group {"className":"vb-timeline__step","layout":{"type":"default"}} -->
<div class="wp-block-group vb-timeline__step"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $villabate_s[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted-light"} -->
<p class="vb-muted-light"><?php echo esc_html( $villabate_s[1] ); ?></p>
<!-- /wp:paragraph --><?php if ( $villabate_s[2] ) : ?>

<!-- wp:image {"className":"vb-arch"} -->
<figure class="wp-block-image vb-arch"><img src="<?php echo villabate_img( $villabate_s[2] ); ?>" alt="<?php echo esc_attr( $villabate_s[3] ); ?>"/></figure>
<!-- /wp:image --><?php endif; ?></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","className":"vb-euro"} -->
<div class="wp-block-columns are-vertically-aligned-center vb-euro"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"className":"vb-framed-photo"} -->
<figure class="wp-block-image vb-framed-photo"><img src="<?php echo villabate_img( 'story-euro-2021.jpg' ); ?>" alt="A crowd waving Italian flags on 18th Avenue in front of Villabate Alba after Italy won the Euros"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">18th Avenue · July 2021</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">When Italy won the Euros, the whole avenue came out.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted-light"} -->
<p class="vb-muted-light">Flags hung from every window, and a giant tricolore got passed over the crowd right outside our door.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-script vb-script--light"} -->
<p class="vb-script vb-script--light">“Not only were we able to celebrate the win, but we were able to come together as a community.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
