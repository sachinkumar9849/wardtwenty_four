<?php
/**
 * Yadukul Construction theme setup.
 */

/* Theme includes */
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/options-page.php';
require_once get_template_directory() . '/inc/acf-fields.php';

function yadukul_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption' ) );
	register_nav_menus( array( 'primary' => 'Primary Menu' ) );
}
add_action( 'after_setup_theme', 'yadukul_setup' );

function yadukul_assets() {
	$uri = get_template_directory_uri();
	$ver = wp_get_theme()->get( 'Version' );

	// Bootstrap + icons + fonts (CDN, same as the original template).
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), '1.11.3' );
	wp_enqueue_style( 'yadukul-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap', array(), null );

	// Theme styles.
	wp_enqueue_style( 'yadukul-style', $uri . '/css/style.css', array( 'bootstrap' ), $ver );
	wp_enqueue_style( 'yadukul-responsive', $uri . '/css/responsive.css', array( 'yadukul-style' ), $ver );

	// Scripts.
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
	wp_enqueue_script( 'yadukul-main', $uri . '/js/main.js', array( 'bootstrap' ), $ver, true );

	// properties.js only where the listing grid is used.
	if ( is_page( array( 'properties', 'property-details' ) ) ) {
		wp_enqueue_script( 'yadukul-properties', $uri . '/js/properties.js', array( 'bootstrap' ), $ver, true );
	}
}
add_action( 'wp_enqueue_scripts', 'yadukul_assets' );
