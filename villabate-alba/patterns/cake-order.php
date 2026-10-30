<?php
/**
 * Title: Cake order form (Custom cakes page)
 * Slug: villabate/cake-order
 * Categories: villabate
 * Description: Photos of past cakes that change with the Occasion picked in the form, flavors and fillings, and the cake request form, then weddings and events. The form is a visual placeholder: point it at a form plugin such as WPForms or Gravity Forms (see README).
 */
// Flavors and fillings offered; also update the Flavor select in the form below if you change these.
$villabate_flavors = array( 'Cassata', 'Rum', 'Cannoli cream', 'Pistachio', 'Lemon' );

// Occasion => label and photos (file => alt text). The form's Occasion select uses these keys,
// and picking one shows its photos. Add an occasion here and it appears in both places.
$villabate_occasions = array(
	'birthday'    => array(
		'Birthday',
		array(
			'custom-cake.jpg' => 'A baker piping a message on a strawberry and chocolate drip cake',
			'cakes.jpg'       => 'A fresh berry tart with a Villabate Alba plaque',
			'ig-4.jpg'        => 'A cake made to look like a slice of watermelon',
		),
	),
	'wedding'     => array(
		'Wedding',
		array( 'cartocci-cake.jpg' => 'A wedding tower of sugared cartocci and fresh roses' ),
	),
	'fathers-day' => array(
		'Father’s Day',
		array(
			'season-fathers-day.jpg'  => 'A Father’s Day cake shaped like a shirt and tie',
			'holiday-fathers-day.jpg' => 'A Father’s Day cake with a beach scene and DAD in gold letters',
		),
	),
	'holiday'     => array(
		'Holiday or theme',
		array(
			'ig-1.jpg'                => 'A green Frankenstein cake for Halloween',
			'season-thanksgiving.jpg' => 'A turkey cake for Thanksgiving',
		),
	),
	'other'       => array(
		'Christening, communion or something else',
		array(
			'story-today.jpg'   => 'A table of decorated cakes at the bakery',
			'story-founder.jpg' => 'Cassata cakes fresh from the kitchen',
		),
	),
);
?>
<!-- wp:group {"tagName":"section","anchor":"order","className":"vb-section vb-cakes vb-cake-order","layout":{"type":"constrained"}} -->
<section id="order" class="wp-block-group vb-section vb-cakes vb-cake-order"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"vb-occasions","layout":{"type":"default"}} -->
<div id="vb-occasions" class="wp-block-group vb-occasions"><?php foreach ( $villabate_occasions as $villabate_key => $villabate_occ ) : ?><!-- wp:group {"className":"vb-occasion vb-occasion--<?php echo esc_attr( $villabate_key ); ?>","layout":{"type":"default"}} -->
<div class="wp-block-group vb-occasion vb-occasion--<?php echo esc_attr( $villabate_key ); ?>"><!-- wp:group {"className":"vb-slides","layout":{"type":"default"}} -->
<div class="wp-block-group vb-slides"><?php foreach ( $villabate_occ[1] as $villabate_file => $villabate_alt ) : ?><!-- wp:image {"className":"vb-arch vb-arch--framed"} -->
<figure class="wp-block-image vb-arch vb-arch--framed"><img src="<?php echo villabate_img( $villabate_file ); ?>" alt="<?php echo esc_attr( $villabate_alt ); ?>"/></figure>
<!-- /wp:image --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"vb-occasion__label"} -->
<p class="vb-occasion__label"><?php echo esc_html( $villabate_occ[0] ); ?> cakes we’ve made</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --><?php endforeach; ?></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"className":"vb-flavors__title"} -->
<h3 class="wp-block-heading vb-flavors__title" id="flavors">Flavors and fillings</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-pills vb-pills--dark"} -->
<p class="vb-pills vb-pills--dark"><?php foreach ( $villabate_flavors as $villabate_x ) : ?><span><?php echo esc_html( $villabate_x ); ?></span><?php endforeach; ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:html -->
<form class="vb-preorder vb-cake-form" action="#" method="post" enctype="multipart/form-data">
  <p class="vb-preorder__title">Request a cake</p>
  <div class="vb-form-row">
    <div><label for="vb-occasion">Occasion</label>
      <select id="vb-occasion" name="occasion" aria-controls="vb-occasions"><?php foreach ( $villabate_occasions as $villabate_key => $villabate_occ ) : ?><option value="<?php echo esc_attr( $villabate_key ); ?>"><?php echo esc_html( $villabate_occ[0] ); ?></option><?php endforeach; ?></select></div>
    <div><label for="vb-servings">Serves</label>
      <select id="vb-servings" name="servings"><option>[SIZES]</option></select></div>
  </div>
  <label for="vb-flavor">Flavor and filling</label>
  <select id="vb-flavor" name="flavor"><option>Cassata</option><option>Rum</option><option>Cannoli cream</option><option>Pistachio</option><option>Lemon</option></select>
  <label for="vb-pickup">Pickup date</label>
  <input id="vb-pickup" type="date" name="pickup_date">
  <label for="vb-message">Message on the cake <span class="vb-optional">(optional)</span></label>
  <input id="vb-message" type="text" name="message" placeholder="Buon compleanno, Nonna!">
  <label for="vb-photo">Inspiration photo <span class="vb-optional">(optional)</span></label>
  <input id="vb-photo" type="file" name="photo" accept="image/*">
  <div class="vb-form-row">
    <div><label for="vb-name">Your name</label><input id="vb-name" type="text" name="name" autocomplete="name"></div>
    <div><label for="vb-phone">Phone</label><input id="vb-phone" type="tel" name="phone" autocomplete="tel"></div>
  </div>
  <p class="vb-preorder__note">No payment yet. We’ll call you to confirm the details and the price.</p>
  <button type="submit">Send cake request</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"events","className":"vb-section vb-events-page","layout":{"type":"constrained"}} -->
<section id="events" class="wp-block-group vb-section vb-events-page"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"className":"vb-arch vb-arch--framed"} -->
<figure class="wp-block-image vb-arch vb-arch--framed"><img src="<?php echo villabate_img( 'cartocci-cake.jpg' ); ?>" alt="A wedding tower of sugared cartocci and fresh roses"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">per le feste</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Weddings, feasts and catering halls.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted"} -->
<p class="vb-muted">Wedding cakes, pastry tables and cookie trays for a crowd. We’ve even built a cartocci tower with fresh roses.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+17183318430">Call to plan an event</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:info@villabate.com">Email us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
