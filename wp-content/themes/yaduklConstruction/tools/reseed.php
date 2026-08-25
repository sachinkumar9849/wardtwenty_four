<?php
/**
 * Restore all theme content from the JSON snapshots in this folder.
 *
 * Run it if a field or repeater is ever accidentally cleared in wp-admin:
 *
 *   /opt/homebrew/opt/php@7.4/bin/php \
 *     wp-content/themes/yaduklConstruction/tools/reseed.php
 *
 * It only writes content; it never deletes posts.
 */
if ( php_sapi_name() !== 'cli' ) {
	exit( 'CLI only' );
}
$root = dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) );
$_SERVER['HTTP_HOST']   = 'localhost:8080';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SERVER_NAME'] = 'localhost';
define( 'WP_USE_THEMES', false );
require $root . '/wp-load.php';

$dir  = __DIR__ . '/';
$load = function ( $f ) use ( $dir ) {
	return file_exists( $dir . $f ) ? json_decode( file_get_contents( $dir . $f ), true ) : array();
};

/* --- Home page options --- */
$home = $load( 'seed.json' );
if ( ! empty( $home['services'] ) ) {
	update_field( 'services', array_map( function ( $s ) {
		return array(
			'number_label' => $s['number_label'], 'icon' => $s['icon'], 'title' => $s['title'],
			'items' => array_map( function ( $i ) { return array( 'text' => $i ); }, $s['items'] ),
		);
	}, $home['services'] ), 'option' );
	echo "  home: services (" . count( $home['services'] ) . " rows)\n";
}
foreach ( array( 'hero_stats' => 'hero_stats', 'build_cards' => 'build_cards', 'why_cards' => 'why_cards', 'cat_cards' => 'cat_cards' ) as $src => $field ) {
	if ( ! empty( $home[ $src ] ) ) {
		update_field( $field, $home[ $src ], 'option' );
		echo "  home: $field (" . count( $home[ $src ] ) . " rows)\n";
	}
}

/* --- Page card grids --- */
foreach ( $load( 'pagecards.json' ) as $tpl => $groups ) {
	$slug = str_replace( array( 'page-', '.php' ), '', $tpl );
	$p    = get_page_by_path( $slug );
	if ( ! $p ) { continue; }
	foreach ( $groups as $field => $rows ) {
		if ( $rows ) {
			update_field( $field, $rows, $p->ID );
			echo "  $slug: $field (" . count( $rows ) . " rows)\n";
		}
	}
}

/* --- Service cards with their small labels --- */
foreach ( $load( 'svc.json' ) as $slug => $rows ) {
	$p = get_page_by_path( $slug );
	if ( $p && $rows ) {
		update_field( 'service_cards', $rows, $p->ID );
		echo "  $slug: service_cards (" . count( $rows ) . " rows)\n";
	}
}

/* --- About: introduction + mission & vision --- */
$about = $load( 'about2.json' );
$p     = get_page_by_path( 'about' );
if ( $p && $about ) {
	foreach ( $about as $k => $v ) { update_field( $k, $v, $p->ID ); }
	echo "  about: " . count( $about ) . " intro/mission fields\n";
}

/* --- Page banners --- */
$map = array(
	'page-about.php' => 'about', 'page-buildings.php' => 'buildings', 'page-construction.php' => 'construction',
	'page-contact.php' => 'contact', 'page-engineering.php' => 'engineering', 'page-land-plotting.php' => 'land-plotting',
	'page-properties.php' => 'properties', 'page-property-details.php' => 'property-details', 'page-rent.php' => 'rent',
);
foreach ( $load( 'heroes.json' ) as $tpl => $h ) {
	if ( ! isset( $map[ $tpl ] ) ) { continue; }
	$p = get_page_by_path( $map[ $tpl ] );
	if ( ! $p ) { continue; }
	update_field( 'hero_heading', $h['heading'], $p->ID );
	update_field( 'hero_subtitle', $h['subtitle'], $p->ID );
	update_field( 'hero_image_url', $h['image_url'], $p->ID );
}
echo "  page banners restored\n";

echo "\nDone. Properties and Testimonials were not touched.\n";
