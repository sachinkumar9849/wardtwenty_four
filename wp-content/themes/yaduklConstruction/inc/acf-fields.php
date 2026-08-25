<?php
/**
 * ACF field groups, registered in PHP so they live in version control
 * instead of only in the database.
 */

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return; // ACF not active.
}

/* ---------------------------------------------------------------
 * Property fields
 * ------------------------------------------------------------ */
acf_add_local_field_group( array(
	'key'      => 'group_property',
	'title'    => 'Property Details',
	'location' => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'property' ) ) ),
	'fields'   => array(
		array( 'key' => 'f_kind',        'label' => 'Kind Label',    'name' => 'kind',        'type' => 'text',   'instructions' => 'Shown above the title, e.g. "Residential Land".' ),
		array( 'key' => 'f_locationtxt', 'label' => 'Location Text', 'name' => 'location_text','type' => 'text',   'instructions' => 'e.g. "Budhanilkantha, Kathmandu".' ),
		array( 'key' => 'f_price_disp',  'label' => 'Price',         'name' => 'price_display','type' => 'text',   'instructions' => 'e.g. "NPR 48 Lakhs".' ),
		array( 'key' => 'f_price_note',  'label' => 'Price Note',    'name' => 'price_note',  'type' => 'text',   'instructions' => 'e.g. "Negotiable".' ),
		array( 'key' => 'f_price_num',   'label' => 'Price (number)','name' => 'price_numeric','type' => 'number','instructions' => 'Used by the search filter. e.g. 4800000' ),
		array( 'key' => 'f_area_disp',   'label' => 'Area',          'name' => 'area_display','type' => 'text',   'instructions' => 'e.g. "4 Aana".' ),
		array( 'key' => 'f_area_num',    'label' => 'Area (sq ft)',  'name' => 'area_numeric','type' => 'number', 'instructions' => 'Used by the search filter.' ),
		array( 'key' => 'f_road',        'label' => 'Road',          'name' => 'road',        'type' => 'text',   'instructions' => 'e.g. "13 ft Road".' ),
		array( 'key' => 'f_badge',       'label' => 'Badge',         'name' => 'badge',       'type' => 'text',   'instructions' => 'Corner badge, e.g. "For Sale". Leave blank to use the Purpose.' ),
		array( 'key' => 'f_featured',    'label' => 'Featured on home page', 'name' => 'featured', 'type' => 'true_false', 'ui' => 1 ),
		array( 'key' => 'f_img_url',     'label' => 'Fallback Image URL', 'name' => 'image_url', 'type' => 'url', 'instructions' => 'Used only if no Featured Image is set.' ),
	),
) );

/* ---------------------------------------------------------------
 * Testimonial fields
 * ------------------------------------------------------------ */
acf_add_local_field_group( array(
	'key'      => 'group_testimonial',
	'title'    => 'Testimonial Details',
	'location' => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'testimonial' ) ) ),
	'fields'   => array(
		array( 'key' => 't_role',   'label' => 'Role / Location', 'name' => 'role',   'type' => 'text' ),
		array( 'key' => 't_rating', 'label' => 'Rating',          'name' => 'rating', 'type' => 'number', 'default_value' => 5, 'min' => 1, 'max' => 5 ),
		array( 'key' => 't_img',    'label' => 'Photo URL',       'name' => 'photo_url', 'type' => 'url' ),
	),
) );

/* ---------------------------------------------------------------
 * Home page sections
 * ------------------------------------------------------------ */

/** Small helper: an eyebrow / title / subtitle trio for a section head. */
function yadukul_head_fields( $p, $label ) {
	return array(
		array( 'key' => $p . '_eyebrow', 'label' => $label . ' – Eyebrow',  'name' => $p . '_eyebrow', 'type' => 'text' ),
		array( 'key' => $p . '_title',   'label' => $label . ' – Title',    'name' => $p . '_title',   'type' => 'text' ),
		array( 'key' => $p . '_sub',     'label' => $label . ' – Subtitle', 'name' => $p . '_sub',     'type' => 'textarea', 'rows' => 2 ),
	);
}

$home_fields = array();

// 1. Hero
$home_fields[] = array( 'key' => 'tab_hero', 'label' => 'Hero', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, array(
	array( 'key' => 'hero_eyebrow', 'label' => 'Eyebrow',        'name' => 'hero_eyebrow', 'type' => 'text' ),
	array( 'key' => 'hero_title',   'label' => 'Heading',        'name' => 'hero_title',   'type' => 'text' ),
	array( 'key' => 'hero_title_np','label' => 'Heading (Nepali)','name'=> 'hero_title_np','type' => 'text' ),
	array( 'key' => 'hero_text',    'label' => 'Intro Text',     'name' => 'hero_text',    'type' => 'textarea', 'rows' => 3 ),
	array( 'key' => 'hero_img',     'label' => 'Background Image','name'=> 'hero_image',   'type' => 'image', 'return_format' => 'url' ),
	array( 'key' => 'hero_img_url', 'label' => 'Background Image URL (fallback)', 'name' => 'hero_image_url', 'type' => 'url' ),
	array( 'key' => 'hero_btn1',    'label' => 'Button 1 Text',  'name' => 'hero_btn1_text', 'type' => 'text' ),
	array( 'key' => 'hero_btn1_url','label' => 'Button 1 Link',  'name' => 'hero_btn1_url',  'type' => 'text' ),
	array( 'key' => 'hero_btn2',    'label' => 'Button 2 Text',  'name' => 'hero_btn2_text', 'type' => 'text' ),
	array( 'key' => 'hero_btn2_url','label' => 'Button 2 Link',  'name' => 'hero_btn2_url',  'type' => 'text' ),
	array( 'key' => 'hero_stats',   'label' => 'Stats', 'name' => 'hero_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add stat',
		'sub_fields' => array(
			array( 'key' => 'hs_num',   'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
			array( 'key' => 'hs_label', 'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
		) ),
) );

// 2. Search bar
$home_fields[] = array( 'key' => 'tab_search', 'label' => 'Search Bar', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, array(
	array( 'key' => 'search_title', 'label' => 'Title',    'name' => 'search_title', 'type' => 'text' ),
	array( 'key' => 'search_sub',   'label' => 'Subtitle', 'name' => 'search_sub',   'type' => 'text' ),
) );

// 3. Featured properties
$home_fields[] = array( 'key' => 'tab_featured', 'label' => 'Featured Properties', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, yadukul_head_fields( 'feat', 'Featured' ) );
$home_fields[] = array( 'key' => 'feat_count', 'label' => 'How many to show', 'name' => 'feat_count', 'type' => 'number', 'default_value' => 6 );
$home_fields[] = array( 'key' => 'feat_link',  'label' => 'View-all Link Text', 'name' => 'feat_link_text', 'type' => 'text' );

// 4. Services
$home_fields[] = array( 'key' => 'tab_services', 'label' => 'Services', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, yadukul_head_fields( 'serv', 'Services' ) );
$home_fields[] = array( 'key' => 'serv_items', 'label' => 'Service Cards', 'name' => 'services', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add service',
	'sub_fields' => array(
		array( 'key' => 'sv_no',    'label' => 'Small Label', 'name' => 'number_label', 'type' => 'text' ),
		array( 'key' => 'sv_icon',  'label' => 'Bootstrap Icon', 'name' => 'icon', 'type' => 'text', 'instructions' => 'e.g. bi-map — see icons.getbootstrap.com' ),
		array( 'key' => 'sv_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
		array( 'key' => 'sv_list',  'label' => 'Bullet Points', 'name' => 'items', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add item',
			'sub_fields' => array( array( 'key' => 'sv_li', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
	) );

// 5. Land plotting  /  7. Construction  /  10. About  — all "split" sections.
foreach ( array(
	array( 'plot',  'Land Plotting' ),
	array( 'const', 'Construction & Engineering' ),
	array( 'about', 'About Company' ),
) as $s ) {
	list( $p, $label ) = $s;
	$home_fields[] = array( 'key' => 'tab_' . $p, 'label' => $label, 'type' => 'tab' );
	$home_fields = array_merge( $home_fields, yadukul_head_fields( $p, $label ) );
	$home_fields = array_merge( $home_fields, array(
		array( 'key' => $p . '_img',      'label' => 'Image',     'name' => $p . '_image',     'type' => 'image', 'return_format' => 'url' ),
		array( 'key' => $p . '_img_url',  'label' => 'Image URL (fallback)', 'name' => $p . '_image_url', 'type' => 'url' ),
		array( 'key' => $p . '_badge_n',  'label' => 'Badge Number', 'name' => $p . '_badge_number', 'type' => 'text' ),
		array( 'key' => $p . '_badge_l',  'label' => 'Badge Label',  'name' => $p . '_badge_label',  'type' => 'text' ),
		array( 'key' => $p . '_list',     'label' => 'Checklist', 'name' => $p . '_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add point',
			'sub_fields' => array( array( 'key' => $p . '_li', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
		array( 'key' => $p . '_btn',      'label' => 'Button Text', 'name' => $p . '_btn_text', 'type' => 'text' ),
		array( 'key' => $p . '_btn_url',  'label' => 'Button Link', 'name' => $p . '_btn_url',  'type' => 'text' ),
	) );
}

// 6. Buildings  /  8. Why Choose Us  /  9. Categories — "card grid" sections.
foreach ( array(
	array( 'build', 'Buildings' ),
	array( 'why',   'Why Choose Us' ),
	array( 'cat',   'Property Categories' ),
) as $s ) {
	list( $p, $label ) = $s;
	$home_fields[] = array( 'key' => 'tab_' . $p, 'label' => $label, 'type' => 'tab' );
	$home_fields = array_merge( $home_fields, yadukul_head_fields( $p, $label ) );
	$home_fields[] = array( 'key' => $p . '_cards', 'label' => 'Cards', 'name' => $p . '_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add card',
		'sub_fields' => array(
			array( 'key' => $p . '_c_icon',  'label' => 'Bootstrap Icon', 'name' => 'icon',  'type' => 'text' ),
			array( 'key' => $p . '_c_title', 'label' => 'Title',       'name' => 'title', 'type' => 'text' ),
			array( 'key' => $p . '_c_text',  'label' => 'Description', 'name' => 'text',  'type' => 'textarea', 'rows' => 3 ),
			array( 'key' => $p . '_c_img',   'label' => 'Image URL',   'name' => 'image_url', 'type' => 'url' ),
			array( 'key' => $p . '_c_meta',  'label' => 'Small Meta',  'name' => 'meta',  'type' => 'text' ),
			array( 'key' => $p . '_c_url',   'label' => 'Link',        'name' => 'url',   'type' => 'text' ),
		) );
}

// Extra repeaters: section 7 feature cards, section 10 stat boxes.
$home_fields[] = array( 'key' => 'const_cards', 'label' => 'Construction – Feature Cards', 'name' => 'const_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add feature',
	'sub_fields' => array(
		array( 'key' => 'cf_icon',  'label' => 'Bootstrap Icon', 'name' => 'icon',  'type' => 'text' ),
		array( 'key' => 'cf_title', 'label' => 'Title',          'name' => 'title', 'type' => 'text' ),
		array( 'key' => 'cf_text',  'label' => 'Description',    'name' => 'text',  'type' => 'textarea', 'rows' => 2 ),
	) );
$home_fields[] = array( 'key' => 'about_stats', 'label' => 'About – Stat Boxes', 'name' => 'about_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add stat',
	'sub_fields' => array(
		array( 'key' => 'as_num',   'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
		array( 'key' => 'as_label', 'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
	) );

// 11. CTA
$home_fields[] = array( 'key' => 'tab_cta', 'label' => 'Call To Action', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, array(
	array( 'key' => 'cta_title',    'label' => 'Title',       'name' => 'cta_title',    'type' => 'text' ),
	array( 'key' => 'cta_text',     'label' => 'Text',        'name' => 'cta_text',     'type' => 'textarea', 'rows' => 2 ),
	array( 'key' => 'cta_btn',      'label' => 'Button Text', 'name' => 'cta_btn_text', 'type' => 'text' ),
	array( 'key' => 'cta_btn_url',  'label' => 'Button Link', 'name' => 'cta_btn_url',  'type' => 'text' ),
	array( 'key' => 'cta_btn2',     'label' => 'Button 2 Text','name'=> 'cta_btn2_text','type' => 'text' ),
	array( 'key' => 'cta_btn2_url', 'label' => 'Button 2 Link','name'=> 'cta_btn2_url', 'type' => 'text' ),
) );

// 12. Testimonials
$home_fields[] = array( 'key' => 'tab_testi', 'label' => 'Testimonials', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, yadukul_head_fields( 'testi', 'Testimonials' ) );

// 13. Latest properties
$home_fields[] = array( 'key' => 'tab_latest', 'label' => 'Latest Properties', 'type' => 'tab' );
$home_fields = array_merge( $home_fields, yadukul_head_fields( 'latest', 'Latest' ) );
$home_fields[] = array( 'key' => 'latest_count', 'label' => 'How many to show', 'name' => 'latest_count', 'type' => 'number', 'default_value' => 3 );

acf_add_local_field_group( array(
	'key'        => 'group_home',
	'title'      => 'Home Page Sections',
	'location'   => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'yadukul-home' ) ) ),
	'menu_order' => 0,
	'style'      => 'default',
	'fields'     => $home_fields,
) );
