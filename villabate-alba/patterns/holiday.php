<?php
/**
 * Title: Holiday pre-orders
 * Slug: villabate/holiday
 * Categories: villabate
 * Description: Skip-the-line pre-order block and the "every feast on the calendar" strip. The form is a visual placeholder: replace it with the store's local-pickup checkout or a form plugin (see README).
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
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:html -->
<form class="vb-preorder" action="#" method="post">
  <p class="vb-preorder__title">Pre-order for pickup</p>
  <label for="vb-date">Pickup date</label>
  <select id="vb-date" name="pickup_date">
    <option>Wed, Nov 25 · Thanksgiving Eve</option>
    <option>Thu, Dec 24 · Christmas Eve</option>
  </select>
  <fieldset>
    <legend>Pickup window</legend>
    <div class="vb-slots">
      <label><input type="radio" name="slot" checked> 7 to 9 AM</label>
      <label><input type="radio" name="slot"> 9 to 11 AM</label>
      <label><input type="radio" name="slot"> 11 AM to 1 PM</label>
      <label><input type="radio" name="slot"> 1 to 3 PM</label>
      <label><input type="radio" name="slot"> 3 to 5 PM</label>
      <label><input type="radio" name="slot"> 5 to 8 PM</label>
    </div>
  </fieldset>
  <p class="vb-preorder__note">Pay online, then pick up at 7001 18th Ave, Brooklyn. Check your items against the list on the box.</p>
  <button type="submit">Start my order</button>
</form>
<!-- /wp:html --></div>
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
