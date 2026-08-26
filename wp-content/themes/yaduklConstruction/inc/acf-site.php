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
		array( 'key' => 's_tabA', 'label' => 'Branding', 'type' => 'tab' ),
		array( 'key' => 's_logo',     'label' => 'Logo',          'name' => 'logo',       'type' => 'image', 'return_format' => 'url', 'instructions' => 'Shown in the header and footer. SVG or PNG.' ),
		array( 'key' => 's_logo_url', 'label' => 'Logo URL',      'name' => 'logo_url',   'type' => 'text', 'instructions' => 'Used when no logo is chosen above.' ),
		array( 'key' => 's_brand',    'label' => 'Brand Name',    'name' => 'brand_name', 'type' => 'text', 'instructions' => 'e.g. YADUKUL' ),
		array( 'key' => 's_brand_t',  'label' => 'Brand Tagline', 'name' => 'brand_tagline', 'type' => 'text', 'instructions' => 'e.g. Real Estate & Construction' ),
		array( 'key' => 's_cta_txt',  'label' => 'Header Button Text', 'name' => 'header_btn_text', 'type' => 'text' ),
		array( 'key' => 's_cta_np',   'label' => 'Header Button (Nepali)', 'name' => 'header_btn_np', 'type' => 'text' ),
		array( 'key' => 's_cta_url',  'label' => 'Header Button Link', 'name' => 'header_btn_url', 'type' => 'text' ),

		array( 'key' => 's_home_seo', 'label' => 'Home Meta Description', 'name' => 'home_meta_description', 'type' => 'textarea', 'rows' => 3, 'instructions' => 'Search-engine summary for the home page.' ),

		array( 'key' => 's_tabN', 'label' => 'Navigation', 'type' => 'tab' ),
		array( 'key' => 's_nav', 'label' => 'Main Menu', 'name' => 'nav_items', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add menu item',
			'sub_fields' => array(
				array( 'key' => 's_n_l',  'label' => 'Label',          'name' => 'label',    'type' => 'text' ),
				array( 'key' => 's_n_np', 'label' => 'Label (Nepali)', 'name' => 'label_np', 'type' => 'text' ),
				array( 'key' => 's_n_u',  'label' => 'Link',           'name' => 'url',      'type' => 'text', 'instructions' => 'e.g. /properties/' ),
			) ),

		array( 'key' => 's_tabF', 'label' => 'Footer', 'type' => 'tab' ),
		array( 'key' => 's_f_about', 'label' => 'About Text', 'name' => 'footer_about', 'type' => 'textarea', 'rows' => 4 ),
		array( 'key' => 's_f_q_h',   'label' => 'Column 1 Heading', 'name' => 'footer_col1_title', 'type' => 'text' ),
		array( 'key' => 's_f_q',     'label' => 'Column 1 Links',   'name' => 'footer_col1', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link',
			'sub_fields' => array(
				array( 'key' => 's_fq_l',  'label' => 'Label',          'name' => 'label',    'type' => 'text' ),
				array( 'key' => 's_fq_np', 'label' => 'Label (Nepali)', 'name' => 'label_np', 'type' => 'text' ),
				array( 'key' => 's_fq_u',  'label' => 'Link',           'name' => 'url',      'type' => 'text' ),
			) ),
		array( 'key' => 's_f_s_h',   'label' => 'Column 2 Heading', 'name' => 'footer_col2_title', 'type' => 'text' ),
		array( 'key' => 's_f_s',     'label' => 'Column 2 Links',   'name' => 'footer_col2', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link',
			'sub_fields' => array(
				array( 'key' => 's_fs_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
				array( 'key' => 's_fs_u', 'label' => 'Link',  'name' => 'url',   'type' => 'text' ),
			) ),
		array( 'key' => 's_f_c_h',   'label' => 'Column 3 Heading', 'name' => 'footer_col3_title', 'type' => 'text' ),
		array( 'key' => 's_f_copy',  'label' => 'Copyright Line',   'name' => 'copyright', 'type' => 'text', 'instructions' => 'Use {year} for the current year.' ),
		array( 'key' => 's_f_legal', 'label' => 'Legal Links',      'name' => 'footer_legal', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add link',
			'sub_fields' => array(
				array( 'key' => 's_fl_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
				array( 'key' => 's_fl_u', 'label' => 'Link',  'name' => 'url',   'type' => 'text' ),
			) ),

		array( 'key' => 's_tabC', 'label' => 'Contact', 'type' => 'tab' ),
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
		array( 'key' => 'd_map',     'label' => 'Map Embed URL',    'name' => 'map_url',         'type' => 'text', 'instructions' => 'Optional. Google Maps &rarr; Share &rarr; Embed a map, and paste the src="..." link. Leave blank to place the map from the address above.' ),
		array( 'key' => 'd_gallery', 'label' => 'Photo Gallery',    'name' => 'gallery',         'type' => 'gallery', 'return_format' => 'url' ),
		array( 'key' => 'd_gal_urls','label' => 'Gallery Image URLs','name' => 'gallery_urls',   'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add image',
			'instructions' => 'Used when no images are chosen above.',
			'sub_fields' => array( array( 'key' => 'd_gu', 'label' => 'URL', 'name' => 'url', 'type' => 'url' ) ) ),
		array( 'key' => 'd_amen',    'label' => 'Features & Amenities', 'name' => 'amenities',   'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add feature',
			'sub_fields' => array( array( 'key' => 'd_am', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
	),
) );

/* Plotting Project fields. */
acf_add_local_field_group( array(
	'key'      => 'group_plot_project',
	'title'    => 'Project Details',
	'location' => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'plot_project' ) ) ),
	'fields'   => array(
		array( 'key' => 'pp_loc',    'label' => 'Location',      'name' => 'location_text', 'type' => 'text', 'instructions' => 'e.g. Budhanilkantha, Kathmandu' ),
		array( 'key' => 'pp_total',  'label' => 'Total Area',    'name' => 'total_area',    'type' => 'text', 'instructions' => 'e.g. 3 Ropani 8 Aana' ),
		array( 'key' => 'pp_sizes',  'label' => 'Plot Sizes',    'name' => 'plot_sizes',    'type' => 'text', 'instructions' => 'e.g. 4 – 6 Aana' ),
		array( 'key' => 'pp_road',   'label' => 'Road Access',   'name' => 'road_access',   'type' => 'text', 'instructions' => 'e.g. 13 ft Blacktopped' ),
		array( 'key' => 'pp_price',  'label' => 'Starting Price','name' => 'price_display', 'type' => 'text', 'instructions' => 'e.g. NPR 46 Lakhs' ),
		array( 'key' => 'pp_note',   'label' => 'Price Note',    'name' => 'price_note',    'type' => 'text', 'instructions' => 'e.g. Starting price' ),
		array( 'key' => 'pp_badge',  'label' => 'Badge',         'name' => 'badge',         'type' => 'text', 'instructions' => 'Corner badge. Defaults to "Plotting Project".' ),
		array( 'key' => 'pp_img',    'label' => 'Image URL',     'name' => 'image_url',     'type' => 'url', 'instructions' => 'Used when no Featured Image is set.' ),
		array( 'key' => 'pp_plots',  'label' => 'Available Plots', 'name' => 'plots', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add plot',
			'sub_fields' => array(
				array( 'key' => 'pp_p_no',     'label' => 'Plot No.', 'name' => 'plot_no', 'type' => 'text' ),
				array( 'key' => 'pp_p_area',   'label' => 'Area',     'name' => 'area',    'type' => 'text' ),
				array( 'key' => 'pp_p_facing', 'label' => 'Facing',   'name' => 'facing',  'type' => 'text' ),
				array( 'key' => 'pp_p_road',   'label' => 'Road',     'name' => 'road',    'type' => 'text' ),
				array( 'key' => 'pp_p_price',  'label' => 'Price',    'name' => 'price',   'type' => 'text' ),
				array( 'key' => 'pp_p_status', 'label' => 'Status',   'name' => 'status',  'type' => 'select',
					'choices' => array( 'Available' => 'Available', 'On Hold' => 'On Hold', 'Sold' => 'Sold' ), 'default_value' => 'Available' ),
			) ),
		array( 'key' => 'pp_amen', 'label' => 'Project Features', 'name' => 'amenities', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add feature',
			'sub_fields' => array( array( 'key' => 'pp_a', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
	),
) );
