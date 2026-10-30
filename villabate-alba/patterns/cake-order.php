<?php
/**
 * Title: Cake order form (Custom cakes page)
 * Slug: villabate/cake-order
 * Categories: villabate
 * Description: The three ordering steps, flavors and fillings, and the cake request form, then weddings and events. The form is a visual placeholder: point it at a form plugin such as WPForms or Gravity Forms (see README).
 */
// Flavors and fillings offered; also update the Flavor select in the form below if you change these.
$villabate_flavors = array( 'Cassata', 'Rum', 'Cannoli cream', 'Pistachio', 'Lemon' );
?>
<!-- wp:group {"tagName":"section","anchor":"order","className":"vb-section vb-cakes vb-cake-order","layout":{"type":"constrained"}} -->
<section id="order" class="wp-block-group vb-section vb-cakes vb-cake-order"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"vb-eyebrow"} -->
<p class="vb-eyebrow">How it works</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Three steps to your cake.</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"vb-steps","layout":{"type":"default"}} -->
<div class="wp-block-group vb-steps"><!-- wp:paragraph -->
<p><span class="vb-step">I</span><strong>Pick size and occasion</strong><br>Birthday, wedding, christening, communion</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="vb-step">II</span><strong>Choose flavors and filling</strong><br>Add an inspiration photo if you have one</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="vb-step">III</span><strong>Pick up in Brooklyn</strong><br>Order 3 to 5 days ahead</p>
<!-- /wp:paragraph --></div>
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
      <select id="vb-occasion" name="occasion"><option>Birthday</option><option>Wedding</option><option>Christening</option><option>Communion</option><option>Anniversary</option><option>Other</option></select></div>
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
