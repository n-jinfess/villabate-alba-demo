<?php
/**
 * Title: Reviews and press
 * Slug: villabate/reviews
 * Categories: villabate
 * Description: Press quotes and Google review cards. To pull reviews automatically, replace the cards group with a Google reviews plugin block.
 */
$villabate_press = array(
	array( 'Kind of mind-blowing.', 'The Infatuation' ),
	array( 'Feels like stepping inside a Christmas ornament.', 'Brooklyn Magazine' ),
	array( 'The prettiest pastries this side of Palermo.', 'Brooklyn Eagle' ),
);
$villabate_reviews = array(
	array( 'Cannoli', 'This is the best cannoli I have ever eaten.', 'Arthur Z.', 'Dec 2023' ),
	array( 'Must visit', 'If you come to NYC and only visit one bakery, make this it.', 'Jason B.', 'Oct 2023' ),
	array( 'Authentic', 'This is by far the most authentic pasticceria I found outside of Sicily.', 'Joseph P.', 'Sep 2023' ),
	array( 'Gelato', 'One of the best gelato that I’ve ever tried.', 'Elena S.', 'Sep 2023' ),
	array( 'Christmas Eve', 'Of course I go on Christmas Eve but they were very quick once you get inside.', 'Kim', 'Dec 2023' ),
	array( 'Mini cannoli', 'Get the mini cannoli made fresh while you wait!', 'Nick', 'Jan 2023' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"reviews","className":"vb-section vb-reviews","layout":{"type":"constrained"}} -->
<section id="reviews" class="wp-block-group vb-section vb-reviews"><!-- wp:heading -->
<h2 class="wp-block-heading">What Brooklyn says</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted">4.6 on Google · 2,600+ reviews · 4.5 on Tripadvisor</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-press","layout":{"type":"grid","minimumColumnWidth":"240px"}} -->
<div class="wp-block-group vb-press"><?php foreach ( $villabate_press as $villabate_pr ) : ?><!-- wp:paragraph -->
<p><em>“<?php echo esc_html( $villabate_pr[0] ); ?>”</em><span><?php echo esc_html( $villabate_pr[1] ); ?></span></p>
<!-- /wp:paragraph --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vb-review-grid","layout":{"type":"grid","minimumColumnWidth":"280px"}} -->
<div class="wp-block-group vb-review-grid"><?php foreach ( $villabate_reviews as $villabate_r ) : ?><!-- wp:quote {"className":"vb-review"} -->
<blockquote class="wp-block-quote vb-review"><!-- wp:paragraph {"className":"vb-review__topic"} -->
<p class="vb-review__topic">★★★★★ · <?php echo esc_html( $villabate_r[0] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>“<?php echo esc_html( $villabate_r[1] ); ?>”</p>
<!-- /wp:paragraph --><cite><?php echo esc_html( $villabate_r[2] ); ?> · Google review · <?php echo esc_html( $villabate_r[3] ); ?></cite></blockquote>
<!-- /wp:quote --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
