<?php
/**
 * Title: Footer (newsletter, links, logo)
 * Slug: villabate/footer
 * Categories: villabate, footer
 * Block Types: core/template-part/footer
 * Description: Tile band, newsletter signup, link columns and the logo. Replace the signup form with your email tool's form block (Mailchimp, etc.).
 */
?>
<!-- wp:html -->
<div class="vb-tiles vb-tiles--tall" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:group {"anchor":"contact","className":"vb-footer","layout":{"type":"constrained"}} -->
<div id="contact" class="wp-block-group vb-footer"><!-- wp:html -->
<div class="vb-tricolore" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:columns {"verticalAlignment":"bottom","className":"vb-footer__news"} -->
<div class="wp-block-columns are-vertically-aligned-bottom vb-footer__news"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading -->
<h2 class="wp-block-heading">First word on <em>holiday trays</em>.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"vb-muted-light"} -->
<p class="vb-muted-light">We’ll tell you when holiday trays are ready. Only a few emails a year.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:html -->
<form class="vb-news" action="#" method="post">
  <label for="vb-email">Email address</label>
  <div class="vb-news__row"><input id="vb-email" type="email" name="email" placeholder="you@example.com" required><button type="submit">Subscribe</button></div>
</form>
<!-- /wp:html --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"vb-footer__links"} -->
<div class="wp-block-columns vb-footer__links"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"vb-footer__brand","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group vb-footer__brand"><!-- wp:image {"className":"vb-footer__logo"} -->
<figure class="wp-block-image vb-footer__logo"><img src="<?php echo villabate_img( 'logo-lockup-light.png' ); ?>" alt="Villabate Alba"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"vb-muted-light"} -->
<p class="vb-muted-light">Pasticceria, gelateria, panetteria. Bensonhurst, Brooklyn dal 1979.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"vb-footer__label"} -->
<p class="vb-footer__label">Order</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo villabate_page_url( 'shop' ); ?>">Order online</a><br><a href="<?php echo villabate_page_url( 'custom-cakes' ); ?>">Custom cakes</a><br><a href="tel:+17183318430">(718) 331-8430</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"vb-footer__label"} -->
<p class="vb-footer__label">Bakery</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="<?php echo villabate_home_url( 'story' ); ?>">Our story</a><br><a href="<?php echo villabate_home_url( 'visit' ); ?>">Visit and hours</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"vb-footer__label"} -->
<p class="vb-footer__label">Follow</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="https://www.instagram.com/villabatealba/">Instagram</a><br><a href="https://www.facebook.com/VillabateAlba/">Facebook</a><br><a href="https://www.tiktok.com/@villabatealba">TikTok</a><br><a href="https://www.yelp.com/">Yelp</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:paragraph {"className":"vb-footer__copy"} -->
<p class="vb-footer__copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Villabate Alba Bakery · 7001 18th Avenue, Brooklyn, NY 11204</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
