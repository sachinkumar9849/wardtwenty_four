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

/* --- Branding, navigation and footer (Site Settings) --- */
$brand = $load( 'branding.json' );
if ( $brand ) {
	foreach ( $brand as $k => $v ) { update_field( $k, $v, 'option' ); }
	echo "  site settings: " . count( $brand ) . " branding/nav/footer fields\n";
}

/* --- Search-engine descriptions --- */
$seo = $load( 'seo.json' );
foreach ( $seo as $slug => $meta ) {
	if ( $slug === '' ) {
		update_field( 'home_meta_description', $meta['description'], 'option' );
		continue;
	}
	$sp = get_page_by_path( $slug );
	if ( $sp ) { update_field( 'meta_description', $meta['description'], $sp->ID ); }
}
if ( $seo ) { echo "  seo descriptions: " . count( $seo ) . "\n"; }

/* --- Generic page sections (rent, construction, engineering, contact, about...) --- */
foreach ( $load( 'sections.json' ) as $tpl => $fields ) {
	$slug = str_replace( array( 'page-', '.php' ), '', $tpl );
	$sp   = get_page_by_path( $slug );
	if ( ! $sp || ! $fields ) { continue; }
	foreach ( $fields as $k => $v ) { update_field( $k, $v, $sp->ID ); }
	echo "  $slug: " . count( $fields ) . " section fields\n";
}

/* --- Buildings page sections --- */
$b_page = get_page_by_path( 'buildings' );
$b_data = $load( 'buildings.json' );
if ( $b_page && $b_data ) {
	foreach ( $b_data as $k => $v ) { update_field( $k, $v, $b_page->ID ); }
	echo "  buildings: " . count( $b_data ) . " section fields\n";
}

/* --- Land plotting page sections --- */
$lp_page = get_page_by_path( 'land-plotting' );
$lp_data = $load( 'landplotting.json' );
if ( $lp_page && $lp_data ) {
	foreach ( $lp_data as $k => $v ) { update_field( $k, $v, $lp_page->ID ); }
	echo "  land-plotting: " . count( $lp_data ) . " section fields\n";
}

/* --- Plotting projects (content only; never creates duplicates) --- */
$pl = $load( 'plotting.json' );
if ( ! empty( $pl['projects'] ) ) {
	foreach ( $pl['projects'] as $i => $pr ) {
		$post = get_page_by_title( $pr['title'], OBJECT, 'plot_project' );
		if ( $post && $post->post_status !== 'publish' ) {
			// Bring a trashed/draft project back so its page works again.
			wp_update_post( array( 'ID' => $post->ID, 'post_status' => 'publish' ) );
		}
		if ( ! $post ) {
			// Recreate a project that was deleted entirely.
			$new_id = wp_insert_post( array(
				'post_type' => 'plot_project', 'post_status' => 'publish',
				'post_title' => $pr['title'], 'menu_order' => $i,
			) );
			if ( ! $new_id ) { continue; }
			$post = get_post( $new_id );
			echo "    recreated missing project: " . $pr['title'] . "\n";
		}
		foreach ( array( 'location_text', 'total_area', 'plot_sizes', 'road_access', 'price_display', 'price_note', 'badge', 'image_url' ) as $f ) {
			update_field( $f, $pr[ $f ], $post->ID );
		}
	}
	$first = get_page_by_title( 'Yadukul Green Valley', OBJECT, 'plot_project' );
	if ( $first && ! empty( $pl['plots'] ) ) { update_field( 'plots', $pl['plots'], $first->ID ); }
	echo "  plotting projects: " . count( $pl['projects'] ) . " restored\n";
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
