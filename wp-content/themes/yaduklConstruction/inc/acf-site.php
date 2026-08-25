<?php
/**
 * Site-wide settings (phone, email, address, socials) and the extra
 * Property fields used by the single-property template.
 *
 * Contact details appear ~24 times across the static pages; putting them here
 * means they are edited once.
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Site Settings',
		'menu_title' => 'Site Settings',
		'menu_slug'  => 'yadukul-settings',
		'capability' => 'edit_posts',
		'icon_url'   => 'dashicons-admin-generic',
		'position'   => 5,
		'redirect'   => false,
	) );
}

acf_add_local_field_group( array(
	'key'      => 'group_site',
	'title'    => 'Contact & Company Details',
	'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'yadukul-settings' ) ) ),
	'fields'   => array(
		array( 'key' => 's_phone',    'label' => 'Phone',            'name' => 'phone',        'type' => 'text', 'instructions' => 'Display format, e.g. +977 9801234567' ),
		array( 'key' => 's_phone_r',  'label' => 'Phone (dial)',     'name' => 'phone_raw',    'type' => 'text', 'instructions' => 'Digits used by the Call button, e.g. +9779801234567' ),
		array( 'key' => 's_landline', 'label' => 'Landline',         'name' => 'landline',     'type' => 'text' ),
		array( 'key' => 's_wa',       'label' => 'WhatsApp Number',  'name' => 'whatsapp',     'type' => 'text', 'instructions' => 'Digits only, e.g. 9779801234567' ),
		array( 'key' => 's_email',    'label' => 'Email',            'name' => 'email',        'type' => 'text' ),
		array( 'key' => 's_email2',   'label' => 'Sales Email',      'name' => 'email_sales',  'type' => 'text' ),
		array( 'key' => 's_addr',     'label' => 'Address',          'name' => 'address',      'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 's_hours',    'label' => 'Opening Hours',    'name' => 'hours',        'type' => 'text' ),
		array( 'key' => 's_map',      'label' => 'Google Map Embed URL', 'name' => 'map_url',  'type' => 'text' ),
		array( 'key' => 's_fb',       'label' => 'Facebook URL',     'name' => 'facebook',     'type' => 'url' ),
		array( 'key' => 's_ig',       'label' => 'Instagram URL',    'name' => 'instagram',    'type' => 'url' ),
		array( 'key' => 's_li',       'label' => 'LinkedIn URL',     'name' => 'linkedin',     'type' => 'url' ),
		array( 'key' => 's_yt',       'label' => 'YouTube URL',      'name' => 'youtube',      'type' => 'url' ),
	),
) );

/* Extra Property fields, shown on the single property page. */
acf_add_local_field_group( array(
	'key'        => 'group_property_detail',
	'title'      => 'Property – Detail Page',
	'location'   => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'property' ) ) ),
	'menu_order' => 1,
	'fields'     => array(
		array( 'key' => 'd_addr',    'label' => 'Full Address',     'name' => 'full_address',    'type' => 'text', 'instructions' => 'Shown under the page title.' ),
		array( 'key' => 'd_price_f', 'label' => 'Price (full)',     'name' => 'price_full',      'type' => 'text', 'instructions' => 'e.g. NPR 48,00,000' ),
		array( 'key' => 'd_price_w', 'label' => 'Price in words',   'name' => 'price_words',     'type' => 'text', 'instructions' => 'e.g. Forty-eight lakhs · negotiable' ),
		array( 'key' => 'd_loc_d',   'label' => 'Location (spec)',  'name' => 'location_detail', 'type' => 'text' ),
		array( 'key' => 'd_area_f',  'label' => 'Area (spec)',      'name' => 'area_full',       'type' => 'text', 'instructions' => 'e.g. 4 Aana (1,369 sq.ft)' ),
		array( 'key' => 'd_road_f',  'label' => 'Road (spec)',      'name' => 'road_full',       'type' => 'text' ),
		array( 'key' => 'd_facing',  'label' => 'Facing',           'name' => 'facing',          'type' => 'text' ),
		array( 'key' => 'd_pid',     'label' => 'Property ID',      'name' => 'property_id',     'type' => 'text', 'instructions' => 'e.g. YK-LND-0142' ),
		array( 'key' => 'd_gallery', 'label' => 'Photo Gallery',    'name' => 'gallery',         'type' => 'gallery', 'return_format' => 'url' ),
		array( 'key' => 'd_gal_urls','label' => 'Gallery Image URLs','name' => 'gallery_urls',   'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add image',
			'instructions' => 'Used when no images are chosen above.',
			'sub_fields' => array( array( 'key' => 'd_gu', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ) ) ),
		array( 'key' => 'd_amen',    'label' => 'Features & Amenities', 'name' => 'amenities',   'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add feature',
			'sub_fields' => array( array( 'key' => 'd_am', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
	),
) );
