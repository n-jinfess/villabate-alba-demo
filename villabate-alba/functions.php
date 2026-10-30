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
