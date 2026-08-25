<?php
/**
 * Fields for the inner pages.
 *
 * Every page template gets a Page Hero (banner image, heading, intro).
 * Pages with repeating card grids get a repeater for those cards.
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

/* --- Page Hero: shown on every page --- */
acf_add_local_field_group( array(
	'key'        => 'group_page_hero',
	'title'      => 'Page Banner',
	'location'   => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'page' ) ) ),
	'menu_order' => 0,
	'fields'     => array(
		array( 'key' => 'ph_title', 'label' => 'Banner Heading',  'name' => 'hero_heading', 'type' => 'text', 'instructions' => 'Large heading over the banner. Leave blank to use the page title.' ),
		array( 'key' => 'ph_sub',   'label' => 'Banner Text',     'name' => 'hero_subtitle','type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'ph_img',   'label' => 'Banner Image',    'name' => 'hero_image',   'type' => 'image', 'return_format' => 'url' ),
		array( 'key' => 'ph_url',   'label' => 'Banner Image URL','name' => 'hero_image_url','type' => 'url', 'instructions' => 'Used when no image is chosen above.' ),
	),
) );

/** Build a card repeater bound to one page template. */
function y_page_cards( $key, $title, $template, $name, $label, $subs ) {
	acf_add_local_field_group( array(
		'key'        => $key,
		'title'      => $title,
		'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $template ) ) ),
		'menu_order' => 1,
		'fields'     => array( array(
			'key' => $key . '_r', 'label' => $label, 'name' => $name,
			'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add item',
			'sub_fields' => $subs,
		) ),
	) );
}

$icon  = function ( $k ) { return array( 'key' => $k . '_icon',  'label' => 'Bootstrap Icon', 'name' => 'icon',  'type' => 'text' ); };
$title_f = function ( $k ) { return array( 'key' => $k . '_t', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ); };
$text_f  = function ( $k ) { return array( 'key' => $k . '_x', 'label' => 'Text',  'name' => 'text',  'type' => 'textarea', 'rows' => 3 ); };
$img_f   = function ( $k ) { return array( 'key' => $k . '_i', 'label' => 'Image URL', 'name' => 'image_url', 'type' => 'url' ); };

// About – introduction block
acf_add_local_field_group( array(
	'key'        => 'g_about_intro',
	'title'      => 'About – Introduction',
	'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-about.php' ) ) ),
	'menu_order' => 1,
	'fields'     => array(
		array( 'key' => 'ai_eyebrow', 'label' => 'Eyebrow',   'name' => 'intro_eyebrow', 'type' => 'text' ),
		array( 'key' => 'ai_title',   'label' => 'Heading',    'name' => 'intro_title',   'type' => 'text' ),
		array( 'key' => 'ai_text',    'label' => 'Body Text',  'name' => 'intro_text',    'type' => 'wysiwyg', 'media_upload' => 0, 'tabs' => 'visual', 'toolbar' => 'basic' ),
		array( 'key' => 'ai_img',     'label' => 'Image',      'name' => 'intro_image',   'type' => 'image', 'return_format' => 'url' ),
		array( 'key' => 'ai_img_url', 'label' => 'Image URL (fallback)', 'name' => 'intro_image_url', 'type' => 'url' ),
		array( 'key' => 'ai_bn',      'label' => 'Badge Top',  'name' => 'intro_badge_number', 'type' => 'text', 'instructions' => 'e.g. Since 2015' ),
		array( 'key' => 'ai_bl',      'label' => 'Badge Bottom','name' => 'intro_badge_label', 'type' => 'text', 'instructions' => 'e.g. Serving Nepal' ),
		array( 'key' => 'ai_stats',   'label' => 'Stat Boxes', 'name' => 'intro_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add stat',
			'sub_fields' => array(
				array( 'key' => 'ai_s_n', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
				array( 'key' => 'ai_s_l', 'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
			) ),
	),
) );

// About – mission & vision
acf_add_local_field_group( array(
	'key'        => 'g_about_mv',
	'title'      => 'About – Mission & Vision',
	'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-about.php' ) ) ),
	'menu_order' => 2,
	'fields'     => array(
		array( 'key' => 'mv_eyebrow', 'label' => 'Eyebrow',  'name' => 'mv_eyebrow', 'type' => 'text' ),
		array( 'key' => 'mv_title',   'label' => 'Heading',   'name' => 'mv_title',   'type' => 'text' ),
		array( 'key' => 'mv_sub',     'label' => 'Subtitle',  'name' => 'mv_sub',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'mv_cards',   'label' => 'Cards',     'name' => 'mv_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add card',
			'sub_fields' => array(
				array( 'key' => 'mv_c_i', 'label' => 'Bootstrap Icon', 'name' => 'icon',  'type' => 'text' ),
				array( 'key' => 'mv_c_t', 'label' => 'Title',          'name' => 'title', 'type' => 'text' ),
				array( 'key' => 'mv_c_x', 'label' => 'Text',           'name' => 'text',  'type' => 'textarea', 'rows' => 5 ),
			) ),
	),
) );

// About – values + team
y_page_cards( 'g_about_values', 'About – Our Values', 'page-about.php', 'value_cards', 'Value Cards',
	array( $icon( 'av' ), $title_f( 'av' ), $text_f( 'av' ) ) );
y_page_cards( 'g_about_team', 'About – Team', 'page-about.php', 'team_cards', 'Team Members',
	array( $img_f( 'at' ), $title_f( 'at' ),
		array( 'key' => 'at_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
		$text_f( 'at' ) ) );

// Construction – services + process steps
y_page_cards( 'g_const_serv', 'Construction – Services', 'page-construction.php', 'service_cards', 'Service Cards',
	array( array( 'key' => 'cs_no', 'label' => 'Small Label', 'name' => 'number_label', 'type' => 'text' ),
		$icon( 'cs' ), $title_f( 'cs' ), $text_f( 'cs' ) ) );
y_page_cards( 'g_const_steps', 'Construction – Process Steps', 'page-construction.php', 'step_cards', 'Process Steps',
	array( array( 'key' => 'cst_n', 'label' => 'Step Number', 'name' => 'number', 'type' => 'text' ),
		$title_f( 'cst' ), $text_f( 'cst' ) ) );

// Engineering – services
y_page_cards( 'g_eng_serv', 'Engineering – Services', 'page-engineering.php', 'service_cards', 'Service Cards',
	array( array( 'key' => 'es_no', 'label' => 'Small Label', 'name' => 'number_label', 'type' => 'text' ),
		$icon( 'es' ), $title_f( 'es' ), $text_f( 'es' ) ) );

// Land plotting – highlights
y_page_cards( 'g_plot_values', 'Land Plotting – Highlights', 'page-land-plotting.php', 'value_cards', 'Highlight Cards',
	array( $icon( 'pv' ), $title_f( 'pv' ), $text_f( 'pv' ) ) );

// The Contact page's contact blocks are driven by Site Settings (phone, email,
// address), so they need no per-page repeater.
