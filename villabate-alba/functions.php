<?php
/**
 * Villabate Alba theme setup.
 *
 * @package villabate-alba
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Front-end and editor styles, fonts and the small behaviour script.
 */
function villabate_assets() {
	wp_enqueue_style(
		'villabate-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,400&family=Inter:wght@400;500;600&family=Italianno&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'villabate', get_theme_file_uri( 'assets/css/villabate.css' ), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'villabate', get_theme_file_uri( 'assets/js/villabate.js' ), array(), wp_get_theme()->get( 'Version' ), array( 'strategy' => 'defer', 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'villabate_assets' );

/**
 * Turn on the section sheets and photo fades before first paint (front end only, so never in the editor).
 * Skipped for visitors who ask for reduced motion.
 */
function villabate_motion_flag() {
	echo "<script>if(!window.matchMedia||!matchMedia('(prefers-reduced-motion: reduce)').matches){document.documentElement.classList.add('vb-motion')}</script>\n";
}
add_action( 'wp_head', 'villabate_motion_flag', 1 );

/**
 * Same look inside the block editor.
 */
function villabate_editor_assets() {
	add_editor_style( 'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;1,9..144,400&family=Inter:wght@400;500;600&family=Italianno&display=swap' );
	add_editor_style( 'assets/css/villabate.css' );
}
add_action( 'after_setup_theme', 'villabate_editor_assets' );

/**
 * Pattern category so every homepage section is easy to find in the inserter.
 */
function villabate_pattern_category() {
	register_block_pattern_category( 'villabate', array( 'label' => __( 'Villabate Alba', 'villabate-alba' ) ) );
}
add_action( 'init', 'villabate_pattern_category' );

/**
 * Helper used inside patterns: URL of an image bundled with the theme.
 *
 * @param string $file File name in assets/images.
 * @return string
 */
function villabate_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * The two ordering pages. The homepage only advertises them; buying happens on these pages.
 * Slugs match the page templates templates/page-shop.html and templates/page-custom-cakes.html.
 */
function villabate_pages() {
	return array(
		'shop'         => __( 'Shop', 'villabate-alba' ),
		'custom-cakes' => __( 'Custom cakes', 'villabate-alba' ),
	);
}

/**
 * Create the ordering pages when the theme is activated, if they do not exist yet.
 */
function villabate_create_pages() {
	foreach ( villabate_pages() as $villabate_slug => $villabate_title ) {
		if ( ! get_page_by_path( $villabate_slug ) ) {
			wp_insert_post(
				array(
					'post_title'  => $villabate_title,
					'post_name'   => $villabate_slug,
					'post_status' => 'publish',
					'post_type'   => 'page',
				)
			);
		}
	}
}
add_action( 'after_switch_theme', 'villabate_create_pages' );

/**
 * Helper used inside patterns: URL of an ordering page, with an optional #section.
 *
 * @param string $slug   Page slug from villabate_pages().
 * @param string $anchor Optional section id on that page.
 * @return string
 */
function villabate_page_url( $slug, $anchor = '' ) {
	$villabate_page = get_page_by_path( $slug );
	$villabate_url  = $villabate_page ? get_permalink( $villabate_page ) : home_url( '/' . $slug . '/' );
	return esc_url( $villabate_url . ( $anchor ? '#' . $anchor : '' ) );
}

/**
 * Helper used inside patterns: link to a section of the homepage, so menu links work from any page.
 *
 * @param string $anchor Section id on the homepage.
 * @return string
 */
function villabate_home_url( $anchor ) {
	return esc_url( home_url( '/#' . $anchor ) );
}

/**
 * Shop data, shared by the full shop (Shop page) and the seasonal teaser (homepage).
 * Product classes: vb-in-SEASON puts it first in that season, vb-cat-* sets its filter.
 */
function villabate_shop_specials() {
	return array(
		array( 'fall', 'season-thanksgiving.jpg', 'Thanksgiving turkey cake', 'Pickup only · pre-order' ),
		array( 'christmas', 'season-christmas.jpg', 'Christmas pastry tray', 'Pickup only · pre-order' ),
		array( 'spring', 'season-easter.jpg', 'Chocolate Easter egg', 'Handmade · in store and pickup' ),
		array( 'mothers', 'season-mothers-day.jpg', 'Mother’s Day heart cookies', 'In store and pickup' ),
		array( 'fathers', 'season-fathers-day.jpg', 'Father’s Day custom cake', 'Pickup only · pre-order' ),
		array( 'summer', 'must-brioche.jpg', 'Brioche con gelato', 'In store daily' ),
	);
}

function villabate_shop_products() {
	return array(
		array( 'shop-rainbow.jpg', 'Rainbow Cookie', 'Cookies', '$29.99', 'vb-in-christmas vb-cat-cookies' ),
		array( 'shop-pignoli.jpg', 'Pignoli', 'Cookies', '$65.00', 'vb-in-fall vb-in-christmas vb-cat-cookies' ),
		array( 'must-pistachio.jpg', 'Pistachio Flavored Almond Cookie', 'Cookies', '$29.99', 'vb-in-christmas vb-in-mothers vb-cat-cookies' ),
		array( 'shop-marzipan.jpg', 'Marzipan or Frutta Martorana', 'Marzipan', '$39.99', 'vb-in-fall vb-in-christmas vb-cat-marzipan' ),
		array( 'shop-cookie-tray.jpg', 'Cookie Tray', 'Assorted', '$60.00', 'vb-in-fall vb-in-christmas vb-in-spring vb-in-mothers vb-in-fathers vb-cat-trays' ),
		array( 'must-sfogliatelle.jpg', 'Sfogliatelle', 'Frozen 6-pack · bake at home · next-day air', '$39.99', 'vb-in-spring vb-in-fathers vb-in-summer vb-cat-pastry' ),
		array( 'shop-amaretti.jpg', 'Amaretti', 'Cookies', '$28.99', 'vb-in-spring vb-in-christmas vb-cat-cookies' ),
		array( 'shop-almond-s.jpg', 'Almond S Cookie', 'Cookies · 1 lb', '$14.00', 'vb-in-spring vb-in-summer vb-cat-cookies' ),
	);
}

/**
 * First-visit picks: image, name, one line, and whether it ships or is in store only.
 * Shown at the top of the homepage sweets section (Shop teaser).
 */
function villabate_must_items() {
	return array(
		array( 'must-cannoli.jpg', 'Cannoli', 'We fill them when you order, with sheep’s milk ricotta from Sicily.', 'store' ),
		array( 'must-pistachio.jpg', 'Pistachio cookie', 'Very green and very pistachio.', 'ships' ),
		array( 'must-lobster-tail.jpg', 'Lobster tail', 'Flaky, full of cream, not too sweet.', 'store' ),
		array( 'must-sfogliatelle.jpg', 'Sfogliatelle', 'Crisp layers with ricotta inside. We ship them frozen.', 'ships' ),
		array( 'must-brioche.jpg', 'Brioche con gelato', 'Gelato in a brioche bun, the way they eat it in Sicily.', 'store' ),
		array( 'must-cartocci.jpg', 'Cartocci', 'Fried dough, rolled in sugar, filled with ricotta.', 'store' ),
	);
}

function villabate_shop_notes() {
	return array(
		'fall'      => 'Thanksgiving is close, so the turkey cake and trays for the table are up front.',
		'christmas' => 'Christmas is coming. Cookie trays, pignoli and rainbow cookies are up front.',
		'spring'    => 'Easter’s on the way. Chocolate eggs and gift trays are up front.',
		'mothers'   => 'For Mother’s Day, the heart cookies and trays are up front.',
		'fathers'   => 'For Father’s Day, the cakes and sfogliatelle are up front.',
		'summer'    => 'It’s summer, so gelato and the lighter cookies are up front.',
	);
}

/**
 * Merch items: image, name, detail, price. The merch is sold by Neighborhood Spot (a Shopify store
 * that blocks embedding), so the site links to the Villabate Alba collection there.
 * Prices and sizes as listed on that collection; update them here if they change.
 */
define( 'VILLABATE_MERCH_STORE', 'https://neighborhood-spot.com/collections/villabate-alba' );

function villabate_merch_items() {
	return array(
		array( 'merch-tee.jpg', 'Carretto tee · Black', 'S to 3XL', 'from $35' ),
		array( 'merch-hoodie.jpg', 'Carretto hoodie · Bone', 'S to 3XL', 'from $65' ),
		array( 'merch-collection.jpg', 'Storefront collection', 'Hoodies and tees in 5 colors', 'from $35' ),
	);
}
