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

/* --- Search-engine description, on every page --- */
acf_add_local_field_group( array(
	'key'        => 'group_page_seo',
	'title'      => 'Search Engine Description',
	'location'   => array( array( array( 'param' => 'post_type', 'operator' => '==', 'value' => 'page' ) ) ),
	'menu_order' => 20,
	'fields'     => array(
		array( 'key' => 'seo_desc', 'label' => 'Meta Description', 'name' => 'meta_description', 'type' => 'textarea', 'rows' => 3,
			'instructions' => 'The summary Google shows under the page title. Around 150–160 characters.' ),
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

// Buildings – all section headings, category tiles and construction projects
acf_add_local_field_group( array(
	'key'        => 'g_build_page',
	'title'      => 'Buildings – Sections',
	'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-buildings.php' ) ) ),
	'menu_order' => 1,
	'fields'     => array(
		array( 'key' => 'bp_tab1', 'label' => 'Categories', 'type' => 'tab' ),
		array( 'key' => 'bp_c_eye', 'label' => 'Eyebrow',  'name' => 'cat_eyebrow', 'type' => 'text' ),
		array( 'key' => 'bp_c_ttl', 'label' => 'Heading',  'name' => 'cat_title',   'type' => 'text' ),
		array( 'key' => 'bp_c_sub', 'label' => 'Subtitle', 'name' => 'cat_sub',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'bp_c_tiles', 'label' => 'Category Tiles', 'name' => 'cat_tiles', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add tile',
			'sub_fields' => array(
				array( 'key' => 'bp_t_img',  'label' => 'Image URL', 'name' => 'image_url', 'type' => 'url' ),
				array( 'key' => 'bp_t_ttl',  'label' => 'Title',     'name' => 'title',     'type' => 'text' ),
				array( 'key' => 'bp_t_meta', 'label' => 'Small Text','name' => 'meta',      'type' => 'text', 'instructions' => 'e.g. 24 listings' ),
				array( 'key' => 'bp_t_url',  'label' => 'Link',      'name' => 'url',       'type' => 'text', 'instructions' => 'e.g. #ready-made' ),
			) ),

		array( 'key' => 'bp_tab2', 'label' => 'Listing Headings', 'type' => 'tab' ),
		array( 'key' => 'bp_r_eye', 'label' => 'Ready-Made – Eyebrow',  'name' => 'ready_eyebrow', 'type' => 'text' ),
		array( 'key' => 'bp_r_ttl', 'label' => 'Ready-Made – Heading',  'name' => 'ready_title',   'type' => 'text' ),
		array( 'key' => 'bp_r_sub', 'label' => 'Ready-Made – Subtitle', 'name' => 'ready_sub',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'bp_m_eye', 'label' => 'Commercial – Eyebrow',  'name' => 'comm_eyebrow',  'type' => 'text' ),
		array( 'key' => 'bp_m_ttl', 'label' => 'Commercial – Heading',  'name' => 'comm_title',    'type' => 'text' ),
		array( 'key' => 'bp_m_sub', 'label' => 'Commercial – Subtitle', 'name' => 'comm_sub',      'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'bp_a_eye', 'label' => 'Apartments – Eyebrow',  'name' => 'apt_eyebrow',   'type' => 'text' ),
		array( 'key' => 'bp_a_ttl', 'label' => 'Apartments – Heading',  'name' => 'apt_title',     'type' => 'text' ),
		array( 'key' => 'bp_a_sub', 'label' => 'Apartments – Subtitle', 'name' => 'apt_sub',       'type' => 'textarea', 'rows' => 2 ),

		array( 'key' => 'bp_tab3', 'label' => 'Construction Projects', 'type' => 'tab' ),
		array( 'key' => 'bp_p_eye', 'label' => 'Eyebrow',  'name' => 'proj_eyebrow', 'type' => 'text' ),
		array( 'key' => 'bp_p_ttl', 'label' => 'Heading',  'name' => 'proj_title',   'type' => 'text' ),
		array( 'key' => 'bp_p_sub', 'label' => 'Subtitle', 'name' => 'proj_sub',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'bp_p_cards', 'label' => 'Project Cards', 'name' => 'proj_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add project',
			'sub_fields' => array(
				array( 'key' => 'bp_pc_img',  'label' => 'Image URL', 'name' => 'image_url', 'type' => 'url' ),
				array( 'key' => 'bp_pc_ttl',  'label' => 'Title',     'name' => 'title',     'type' => 'text' ),
				array( 'key' => 'bp_pc_meta', 'label' => 'Caption',   'name' => 'meta',      'type' => 'text', 'instructions' => 'e.g. 6 units · handover Q3 2026' ),
			) ),
		array( 'key' => 'bp_p_btn', 'label' => 'Button Text', 'name' => 'proj_btn_text', 'type' => 'text' ),
		array( 'key' => 'bp_p_url', 'label' => 'Button Link', 'name' => 'proj_btn_url',  'type' => 'text' ),

		array( 'key' => 'bp_tab4', 'label' => 'Call To Action', 'type' => 'tab' ),
		array( 'key' => 'bp_x_ttl', 'label' => 'Heading',     'name' => 'cta_title',    'type' => 'text' ),
		array( 'key' => 'bp_x_sub', 'label' => 'Text',        'name' => 'cta_text',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'bp_x_btn', 'label' => 'Button Text', 'name' => 'cta_btn_text', 'type' => 'text' ),
		array( 'key' => 'bp_x_url', 'label' => 'Button Link', 'name' => 'cta_btn_url',  'type' => 'text' ),
	),
) );

// Land plotting – section headings, location split and investment cards
acf_add_local_field_group( array(
	'key'        => 'g_plot_page',
	'title'      => 'Land Plotting – Sections',
	'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-land-plotting.php' ) ) ),
	'menu_order' => 1,
	'fields'     => array(
		array( 'key' => 'lp_tab1', 'label' => 'Projects', 'type' => 'tab' ),
		array( 'key' => 'lp_p_eye', 'label' => 'Eyebrow',  'name' => 'projects_eyebrow', 'type' => 'text' ),
		array( 'key' => 'lp_p_ttl', 'label' => 'Heading',  'name' => 'projects_title',   'type' => 'text' ),
		array( 'key' => 'lp_p_sub', 'label' => 'Subtitle', 'name' => 'projects_sub',     'type' => 'textarea', 'rows' => 2 ),

		array( 'key' => 'lp_tab2', 'label' => 'Available Plots', 'type' => 'tab' ),
		array( 'key' => 'lp_a_eye', 'label' => 'Eyebrow',  'name' => 'plots_eyebrow', 'type' => 'text' ),
		array( 'key' => 'lp_a_ttl', 'label' => 'Heading',  'name' => 'plots_title',   'type' => 'text' ),
		array( 'key' => 'lp_a_sub', 'label' => 'Subtitle', 'name' => 'plots_sub',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'lp_a_note','label' => 'Footnote', 'name' => 'plots_note',    'type' => 'text' ),

		array( 'key' => 'lp_tab3', 'label' => 'Project Location', 'type' => 'tab' ),
		array( 'key' => 'lp_l_eye', 'label' => 'Eyebrow',   'name' => 'loc_eyebrow', 'type' => 'text' ),
		array( 'key' => 'lp_l_ttl', 'label' => 'Heading',   'name' => 'loc_title',   'type' => 'text' ),
		array( 'key' => 'lp_l_sub', 'label' => 'Text',      'name' => 'loc_sub',     'type' => 'textarea', 'rows' => 4 ),
		array( 'key' => 'lp_l_img', 'label' => 'Image URL', 'name' => 'loc_image_url', 'type' => 'url' ),
		array( 'key' => 'lp_l_bn',  'label' => 'Badge Top',    'name' => 'loc_badge_number', 'type' => 'text' ),
		array( 'key' => 'lp_l_bl',  'label' => 'Badge Bottom', 'name' => 'loc_badge_label',  'type' => 'text' ),
		array( 'key' => 'lp_l_list','label' => 'Checklist', 'name' => 'loc_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add point',
			'sub_fields' => array( array( 'key' => 'lp_l_li', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
		array( 'key' => 'lp_l_btn', 'label' => 'Button Text', 'name' => 'loc_btn_text', 'type' => 'text' ),
		array( 'key' => 'lp_l_url', 'label' => 'Button Link', 'name' => 'loc_btn_url',  'type' => 'text' ),

		array( 'key' => 'lp_tabF', 'label' => 'Project Features', 'type' => 'tab' ),
		array( 'key' => 'lp_f_eye', 'label' => 'Eyebrow',  'name' => 'features_eyebrow', 'type' => 'text' ),
		array( 'key' => 'lp_f_ttl', 'label' => 'Heading',  'name' => 'features_title',   'type' => 'text' ),
		array( 'key' => 'lp_f_sub', 'label' => 'Subtitle', 'name' => 'features_sub',     'type' => 'textarea', 'rows' => 2 ),

		array( 'key' => 'lp_tabC', 'label' => 'Call To Action', 'type' => 'tab' ),
		array( 'key' => 'lp_c_ttl', 'label' => 'Heading',     'name' => 'cta_title',    'type' => 'text' ),
		array( 'key' => 'lp_c_sub', 'label' => 'Text',        'name' => 'cta_text',     'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'lp_c_btn', 'label' => 'Button Text', 'name' => 'cta_btn_text', 'type' => 'text' ),
		array( 'key' => 'lp_c_url', 'label' => 'Button Link', 'name' => 'cta_btn_url',  'type' => 'text' ),

		array( 'key' => 'lp_tab4', 'label' => 'Investment', 'type' => 'tab' ),
		array( 'key' => 'lp_i_eye', 'label' => 'Eyebrow',  'name' => 'invest_eyebrow', 'type' => 'text' ),
		array( 'key' => 'lp_i_ttl', 'label' => 'Heading',  'name' => 'invest_title',   'type' => 'text' ),
		array( 'key' => 'lp_i_sub', 'label' => 'Text',     'name' => 'invest_sub',     'type' => 'textarea', 'rows' => 3 ),
		array( 'key' => 'lp_i_btn', 'label' => 'Button Text', 'name' => 'invest_btn_text', 'type' => 'text' ),
		array( 'key' => 'lp_i_url', 'label' => 'Button Link', 'name' => 'invest_btn_url',  'type' => 'text' ),
		array( 'key' => 'lp_i_cards', 'label' => 'Benefit Cards', 'name' => 'invest_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add benefit',
			'sub_fields' => array(
				array( 'key' => 'lp_i_c_i', 'label' => 'Bootstrap Icon', 'name' => 'icon',  'type' => 'text' ),
				array( 'key' => 'lp_i_c_t', 'label' => 'Title',          'name' => 'title', 'type' => 'text' ),
				array( 'key' => 'lp_i_c_x', 'label' => 'Text',           'name' => 'text',  'type' => 'textarea', 'rows' => 2 ),
			) ),
	),
) );

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
