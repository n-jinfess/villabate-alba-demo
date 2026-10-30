<?php
/**
 * Title: Holiday pre-orders
 * Slug: villabate/holiday
 * Categories: villabate
 * Description: Skip-the-line pitch and the "every feast on the calendar" strip (homepage). The pre-order form itself is on the Shop page.
 */
$villabate_feasts = array(
	array( 'holiday-easter.jpg', 'Easter', 'Hand-painted chocolate eggs' ),
	array( 'season-mothers-day.jpg', 'Mother’s Day', 'Heart cookies for Mom' ),
	array( 'holiday-fathers-day.jpg', 'Father’s Day', 'Custom cakes for Dad' ),
	array( 'season-thanksgiving.jpg', 'Thanksgiving', 'The turkey cake and pies' ),
	array( 'season-christmas.jpg', 'Christmas', 'Pastry trays and cookies' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"holiday","className":"vb-section vb-holiday","layout":{"type":"constrained"}} -->
<section id="holiday" class="wp-block-group vb-section vb-holiday"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">Le feste · Holiday pre-orders</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Skip the holiday line.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>On Christmas Eve the line goes out the door. Order ahead, pick a time, and your box will be waiting with your list on it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-pills"} -->
<p class="vb-pills"><span>Thanksgiving</span><span>Christmas Eve</span><span>St. Joseph’s Day sfince</span><span>Easter cassata</span><span>Feast of Santa Rosalia</span></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"vb-preorder vb-preorder--cta","layout":{"type":"default"}} -->
<div class="wp-block-group vb-preorder vb-preorder--cta"><!-- wp:paragraph {"className":"vb-preorder__title"} -->
<p class="vb-preorder__title">Pre-order for pickup</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"vb-preorder__note"} -->
<p class="vb-preorder__note">Pick your day and a two-hour window, pay online, and walk past the line on 18th Avenue.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo villabate_page_url( 'shop', 'holiday' ); ?>">Choose a pickup time →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"level":3,"className":"vb-feasts__title"} -->
<h3 class="wp-block-heading vb-feasts__title">Every feast on the calendar</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"vb-feasts","layout":{"type":"grid","minimumColumnWidth":"180px"}} -->
<div class="wp-block-group vb-feasts"><?php foreach ( $villabate_feasts as $villabate_f ) : ?><!-- wp:group {"className":"vb-feast","layout":{"type":"default"}} -->
<div class="wp-block-group vb-feast"><!-- wp:image {"className":"vb-arch"} -->
<figure class="wp-block-image vb-arch"><img src="<?php echo villabate_img( $villabate_f[0] ); ?>" alt="<?php echo esc_attr( $villabate_f[1] . ': ' . $villabate_f[2] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( $villabate_f[1] ); ?></strong><br><?php echo esc_html( $villabate_f[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
