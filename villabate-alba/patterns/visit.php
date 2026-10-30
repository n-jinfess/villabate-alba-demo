<?php
/**
 * Title: Visit the bakery
 * Slug: villabate/visit
 * Categories: villabate
 * Description: Address, hours, tips and a live Google Map (no API key needed).
 */
?>
<!-- wp:group {"tagName":"section","anchor":"visit","className":"vb-section vb-visit","layout":{"type":"constrained"}} -->
<section id="visit" class="wp-block-group vb-section vb-visit"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"vb-script"} -->
<p class="vb-script">Vieni a trovarci</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Visit the bakery</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>7001 18th Avenue</strong><br>Brooklyn, NY 11204</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Every day, 7 AM to 8 PM<br>Holidays: [HOLIDAY HOURS]</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="tel:+17183318430">(718) 331-8430</a><br><a href="mailto:info@villabate.com">info@villabate.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"vb-tips","layout":{"type":"default"}} -->
<div class="wp-block-group vb-tips"><!-- wp:paragraph -->
<p><strong>There are two lines.</strong> One for pastry and bread, one for gelato.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Grab an espresso</strong> at the stand-up bar, like in Sicily.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Big order?</strong> Call ahead at (718) 331-8430.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Can’t make it?</strong> We deliver through Uber Eats, Grubhub and DoorDash.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.google.com/maps/dir/?api=1&amp;destination=Villabate+Alba+7001+18th+Ave+Brooklyn+NY+11204">Get directions</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"className":"vb-framed-photo"} -->
<figure class="wp-block-image vb-framed-photo"><img src="<?php echo villabate_img( 'visit-storefront.jpg' ); ?>" alt="The Villabate Alba storefront on 18th Avenue, with its red script sign and the gelato cone on the corner"/></figure>
<!-- /wp:image -->

<!-- wp:html -->
<div class="vb-map"><iframe title="Map showing Villabate Alba at 7001 18th Avenue, Brooklyn" src="https://www.google.com/maps?q=Villabate+Alba,+7001+18th+Ave,+Brooklyn,+NY+11204&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
