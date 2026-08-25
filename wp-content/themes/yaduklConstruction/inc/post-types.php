<?php
/**
 * Custom post types and taxonomies.
 *
 * Properties are a post type (not repeater rows) because the same listing has to
 * appear on the home page, /properties/, /rent/ and /buildings/, and needs its
 * own detail URL. Repeater rows cannot do that.
 */

function yadukul_register_post_types() {

	register_post_type( 'property', array(
		'labels' => array(
			'name'               => 'Properties',
			'singular_name'      => 'Property',
			'add_new_item'       => 'Add New Property',
			'edit_item'          => 'Edit Property',
			'all_items'          => 'All Properties',
			'search_items'       => 'Search Properties',
			'not_found'          => 'No properties yet.',
		),
		'public'       => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-building',
		'menu_position'=> 5,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'rewrite'      => array( 'slug' => 'property' ),
	) );

	register_post_type( 'testimonial', array(
		'labels' => array(
			'name'          => 'Testimonials',
			'singular_name' => 'Testimonial',
			'add_new_item'  => 'Add New Testimonial',
			'edit_item'     => 'Edit Testimonial',
			'all_items'     => 'All Testimonials',
			'not_found'     => 'No testimonials yet.',
		),
		'public'      => false,
		'show_ui'     => true,
		'menu_icon'   => 'dashicons-format-quote',
		'menu_position' => 6,
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
	) );

	// Purpose: Sale / Rent.
	register_taxonomy( 'property_purpose', 'property', array(
		'labels'            => array( 'name' => 'Purpose', 'singular_name' => 'Purpose' ),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'rewrite'           => array( 'slug' => 'purpose' ),
	) );

	// Type: Land / House / Commercial / Apartment.
	register_taxonomy( 'property_type', 'property', array(
		'labels'            => array( 'name' => 'Property Types', 'singular_name' => 'Property Type' ),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'rewrite'           => array( 'slug' => 'property-type' ),
	) );

	// Location: Kathmandu / Lalitpur / ...
	register_taxonomy( 'property_location', 'property', array(
		'labels'            => array( 'name' => 'Locations', 'singular_name' => 'Location' ),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'rewrite'           => array( 'slug' => 'location' ),
	) );
}
add_action( 'init', 'yadukul_register_post_types' );
