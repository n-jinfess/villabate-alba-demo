<?php
/**
 * Title: Holiday feasts
 * Slug: villabate/holiday
 * Categories: villabate
 * Description: The feasts the bakery bakes for, each with a photo slideshow. Holiday orders are by phone.
 */
// Each feast: name, line, then its photos (file => alt). Two or more photos become a slideshow.
$villabate_feasts = array(
	array( 'St. Patrick’s Day', 'Pistachio zeppole and sfingi', array( 'feast-st-patricks.jpg' => 'Pistachio zeppole with shamrocks and Villabate Alba plaques' ) ),
	array(
		'Easter',
		'Hand-painted chocolate eggs',
		array(
			'feast-easter-egg.jpg' => 'A giant chocolate Easter egg hand-painted with a mountain landscape',
			'season-easter.jpg'    => 'A chocolate Easter egg decorated with flowers and chicks',
			'holiday-easter.jpg'   => 'Chocolate Easter eggs wrapped in cellophane',
		),
	),
	array( 'Mother’s Day', 'Heart cookies for Mom', array( 'season-mothers-day.jpg' => 'Mother’s Day heart cookies' ) ),
	array(
		'Father’s Day',
		'Custom cakes for Dad',
		array(
			'holiday-fathers-day.jpg' => 'A Father’s Day cake with a beach scene and DAD in gold letters',
			'season-fathers-day.jpg'  => 'A Father’s Day cake shaped like a shirt and tie',
		),
	),
	array(
		'Thanksgiving',
		'The turkey cake and pies',
		array(
			'season-thanksgiving.jpg' => 'A turkey cake for Thanksgiving',
			'feast-pecan-pie.jpg'     => 'A pecan pie',
		),
	),
	array(
		'Christmas',
		'Gingerbread houses, trays and cookies',
		array(
			'feast-gingerbread-house.jpg' => 'A decorated gingerbread house',
			'feast-cannoli-tree.jpg'      => 'A Christmas tree built from green cannoli',
			'feast-gingerbread-man.jpg'   => 'A gingerbread man cake',
			'season-christmas.jpg'        => 'A tray of Christmas pastries',
		),
	),
);
?>
<!-- wp:group {"tagName":"section","anchor":"holiday","className":"vb-section vb-holiday","layout":{"type":"constrained"}} -->
<section id="holiday" class="wp-block-group vb-section vb-holiday"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">Le feste</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Every feast on the calendar.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-holiday__order"} -->
<p class="vb-holiday__order">Holiday orders: call <a href="tel:+17183318430">(718) 331-8430</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-feasts","layout":{"type":"grid","minimumColumnWidth":"180px"}} -->
<div class="wp-block-group vb-feasts"><?php foreach ( $villabate_feasts as $villabate_f ) : ?><!-- wp:group {"className":"vb-feast","layout":{"type":"default"}} -->
<div class="wp-block-group vb-feast"><!-- wp:group {"className":"vb-slides","layout":{"type":"default"}} -->
<div class="wp-block-group vb-slides"><?php foreach ( $villabate_f[2] as $villabate_file => $villabate_alt ) : ?><!-- wp:image {"className":"vb-arch"} -->
<figure class="wp-block-image vb-arch"><img src="<?php echo villabate_img( $villabate_file ); ?>" alt="<?php echo esc_attr( $villabate_alt ); ?>"/></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html( $villabate_f[0] ); ?></strong><br><?php echo esc_html( $villabate_f[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
