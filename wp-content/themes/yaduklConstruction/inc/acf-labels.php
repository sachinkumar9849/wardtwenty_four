<?php
/**
 * Shared search-filter options and reusable button/UI labels.
 * These strings appear on several templates, so they live in Site Settings.
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

acf_add_local_field_group( array(
	'key'      => 'group_filters',
	'title'    => 'Search Filters & Labels',
	'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'yadukul-settings' ) ) ),
	'menu_order' => 5,
	'fields'   => array(
		array( 'key' => 'fl_tab1', 'label' => 'Price & Area Ranges', 'type' => 'tab' ),
		array( 'key' => 'fl_price', 'label' => 'Budget Options', 'name' => 'price_ranges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add range',
			'sub_fields' => array(
				array( 'key' => 'fl_p_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text', 'instructions' => 'e.g. Under 50 Lakhs' ),
				array( 'key' => 'fl_p_v', 'label' => 'Value', 'name' => 'value', 'type' => 'text', 'instructions' => 'e.g. 0-5000000' ),
			) ),
		array( 'key' => 'fl_area', 'label' => 'Area Options', 'name' => 'area_ranges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add range',
			'sub_fields' => array(
				array( 'key' => 'fl_a_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
				array( 'key' => 'fl_a_v', 'label' => 'Value', 'name' => 'value', 'type' => 'text' ),
			) ),
		array( 'key' => 'fl_sort', 'label' => 'Sort Options', 'name' => 'sort_options', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add option',
			'sub_fields' => array( array( 'key' => 'fl_s_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ) ) ),

		array( 'key' => 'fl_tab2', 'label' => 'Button & UI Labels', 'type' => 'tab' ),
		array( 'key' => 'lb_call',    'label' => 'Call Button',       'name' => 'lbl_call',        'type' => 'text' ),
		array( 'key' => 'lb_wa',      'label' => 'WhatsApp Button',   'name' => 'lbl_whatsapp',    'type' => 'text' ),
		array( 'key' => 'lb_enq',     'label' => 'Enquiry Button',    'name' => 'lbl_enquiry',     'type' => 'text' ),
		array( 'key' => 'lb_visit',   'label' => 'Site Visit Button', 'name' => 'lbl_visit',       'type' => 'text' ),
		array( 'key' => 'lb_view',    'label' => 'View Details',      'name' => 'lbl_view_details','type' => 'text' ),
		array( 'key' => 'lb_viewp',   'label' => 'View Project',      'name' => 'lbl_view_project','type' => 'text' ),
		array( 'key' => 'lb_explore', 'label' => 'Explore',           'name' => 'lbl_explore',     'type' => 'text' ),
		array( 'key' => 'lb_home',    'label' => 'Breadcrumb Home',   'name' => 'lbl_home',        'type' => 'text' ),
		array( 'key' => 'lb_apply',   'label' => 'Apply Filters',     'name' => 'lbl_apply',       'type' => 'text' ),
		array( 'key' => 'lb_reset',   'label' => 'Reset',             'name' => 'lbl_reset',       'type' => 'text' ),
		array( 'key' => 'lb_search',  'label' => 'Search Button',     'name' => 'lbl_search',      'type' => 'text' ),
		array( 'key' => 'lb_found',   'label' => '"properties found"','name' => 'lbl_found',       'type' => 'text' ),
		array( 'key' => 'lb_prev',    'label' => 'Previous',          'name' => 'lbl_prev',        'type' => 'text' ),
		array( 'key' => 'lb_next',    'label' => 'Next',              'name' => 'lbl_next',        'type' => 'text' ),
		array( 'key' => 'lb_zoom',    'label' => 'Gallery Zoom Hint', 'name' => 'lbl_zoom',        'type' => 'text' ),
	),
) );

/* Contact form: options and messages. */
acf_add_local_field_group( array(
	'key'      => 'group_contact_form',
	'title'    => 'Contact Form',
	'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php' ) ) ),
	'menu_order' => 4,
	'fields'   => array(
		array( 'key' => 'cf_services', 'label' => 'Service Options', 'name' => 'service_options', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add option',
			'sub_fields' => array( array( 'key' => 'cf_s_l', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ) ) ),
		array( 'key' => 'cf_success', 'label' => 'Success Message', 'name' => 'form_success', 'type' => 'textarea', 'rows' => 2 ),
		array( 'key' => 'cf_submit',  'label' => 'Submit Button',   'name' => 'form_submit',  'type' => 'text' ),
		array( 'key' => 'cf_map_cap', 'label' => 'Map Caption',     'name' => 'map_caption',  'type' => 'text' ),
		array( 'key' => 'cf_wa_note', 'label' => 'WhatsApp Note',   'name' => 'whatsapp_note','type' => 'text' ),
	),
) );

/* Per-page hero / section button labels. */
function y_register_btns( $template, $buttons ) {
	$slug = str_replace( array( 'page-', '.php' ), '', $template );
	$f = array();
	foreach ( $buttons as $i => $b ) {
		$k = 'bt_' . $slug . '_' . $i;
		$f[] = array( 'key' => $k . '_t', 'label' => $b[1] . ' – Text', 'name' => $b[0] . '_text', 'type' => 'text' );
		$f[] = array( 'key' => $k . '_u', 'label' => $b[1] . ' – Link', 'name' => $b[0] . '_url',  'type' => 'text' );
	}
	acf_add_local_field_group( array(
		'key'        => 'g_bt_' . $slug,
		'title'      => 'Buttons',
		'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $template ) ) ),
		'menu_order' => 6,
		'fields'     => $f,
	) );
}

y_register_btns( 'page-construction.php', array(
	array( 'btn_start',   'Start Your Project' ),
	array( 'btn_process', 'See Our Process' ),
	array( 'btn_est',     'Request an Estimate' ),
) );
y_register_btns( 'page-engineering.php', array(
	array( 'btn_explore', 'Explore Services' ),
	array( 'btn_discuss', 'Discuss Your Drawing' ),
	array( 'btn_constr',  'See Construction Services' ),
) );
y_register_btns( 'page-buildings.php', array(
	array( 'btn_houses', 'See All Houses' ),
	array( 'btn_comm',   'See All Commercial' ),
	array( 'btn_apts',   'See All Apartments' ),
) );
y_register_btns( 'page-about.php',        array( array( 'btn_work',  'Work With Us' ) ) );
y_register_btns( 'page-rent.php',         array( array( 'btn_browse','Browse All Rentals' ) ) );
y_register_btns( 'page-land-plotting.php',array( array( 'btn_view',  'View Plotting Projects' ) ) );
y_register_btns( 'page-properties.php',   array( array( 'btn_req',   'Request a Property Search' ) ) );

/* Table headings + structural section headings, shared. */
acf_add_local_field_group( array(
	'key'      => 'group_ui_headings',
	'title'    => 'Table & Section Headings',
	'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'yadukul-settings' ) ) ),
	'menu_order' => 6,
	'fields'   => array(
		array( 'key' => 'th_tab', 'label' => 'Plots Table', 'type' => 'tab' ),
		array( 'key' => 'th_no',  'label' => 'Plot No.', 'name' => 'th_plot_no', 'type' => 'text' ),
		array( 'key' => 'th_ar',  'label' => 'Area',     'name' => 'th_area',    'type' => 'text' ),
		array( 'key' => 'th_fa',  'label' => 'Facing',   'name' => 'th_facing',  'type' => 'text' ),
		array( 'key' => 'th_ro',  'label' => 'Road',     'name' => 'th_road',    'type' => 'text' ),
		array( 'key' => 'th_pr',  'label' => 'Price',    'name' => 'th_price',   'type' => 'text' ),
		array( 'key' => 'th_st',  'label' => 'Status',   'name' => 'th_status',  'type' => 'text' ),
		array( 'key' => 'th_ac',  'label' => 'Action',   'name' => 'th_action',  'type' => 'text' ),

		array( 'key' => 'sh_tab', 'label' => 'Detail Page Headings', 'type' => 'tab' ),
		array( 'key' => 'sh_pd',  'label' => 'Property Details',   'name' => 'sh_property_details', 'type' => 'text' ),
		array( 'key' => 'sh_fa',  'label' => 'Features & Amenities','name' => 'sh_features',       'type' => 'text' ),
		array( 'key' => 'sh_sp',  'label' => 'Similar Properties', 'name' => 'sh_similar',         'type' => 'text' ),
		array( 'key' => 'sh_ap',  'label' => 'About This Project', 'name' => 'sh_about_project',   'type' => 'text' ),
		array( 'key' => 'sh_pf',  'label' => 'Project Features',   'name' => 'sh_project_features','type' => 'text' ),
		array( 'key' => 'sh_av',  'label' => 'Available Plots',    'name' => 'sh_available_plots', 'type' => 'text' ),
		array( 'key' => 'sh_op',  'label' => 'Other Projects',     'name' => 'sh_other_projects',  'type' => 'text' ),
		array( 'key' => 'sh_loc', 'label' => 'Location',           'name' => 'sh_location',        'type' => 'text' ),
	),
) );

/* Contact form field labels and validation messages. */
acf_add_local_field_group( array(
	'key'      => 'group_form_labels',
	'title'    => 'Form Labels & Messages',
	'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php' ) ) ),
	'menu_order' => 5,
	'fields'   => array(
		array( 'key' => 'fm_n',  'label' => 'Name Label',      'name' => 'lb_name',   'type' => 'text' ),
		array( 'key' => 'fm_ne', 'label' => 'Name Error',      'name' => 'er_name',   'type' => 'text' ),
		array( 'key' => 'fm_p',  'label' => 'Phone Label',     'name' => 'lb_phone',  'type' => 'text' ),
		array( 'key' => 'fm_pe', 'label' => 'Phone Error',     'name' => 'er_phone',  'type' => 'text' ),
		array( 'key' => 'fm_e',  'label' => 'Email Label',     'name' => 'lb_email',  'type' => 'text' ),
		array( 'key' => 'fm_ee', 'label' => 'Email Error',     'name' => 'er_email',  'type' => 'text' ),
		array( 'key' => 'fm_s',  'label' => 'Service Label',   'name' => 'lb_service','type' => 'text' ),
		array( 'key' => 'fm_sp', 'label' => 'Service Placeholder', 'name' => 'ph_service', 'type' => 'text' ),
		array( 'key' => 'fm_se', 'label' => 'Service Error',   'name' => 'er_service','type' => 'text' ),
		array( 'key' => 'fm_m',  'label' => 'Message Label',   'name' => 'lb_message','type' => 'text' ),
		array( 'key' => 'fm_me', 'label' => 'Message Error',   'name' => 'er_message','type' => 'text' ),
		array( 'key' => 'fm_ci', 'label' => 'Phone Block Title',    'name' => 'ci_phone',    'type' => 'text' ),
		array( 'key' => 'fm_cw', 'label' => 'WhatsApp Block Title', 'name' => 'ci_whatsapp', 'type' => 'text' ),
		array( 'key' => 'fm_ce', 'label' => 'Email Block Title',    'name' => 'ci_email',    'type' => 'text' ),
		array( 'key' => 'fm_q1', 'label' => 'Quick CTA – Call',     'name' => 'q_call',      'type' => 'text' ),
		array( 'key' => 'fm_q2', 'label' => 'Quick CTA – WhatsApp', 'name' => 'q_whatsapp',  'type' => 'text' ),
		array( 'key' => 'fm_q3', 'label' => 'Quick CTA – Email',    'name' => 'q_email',     'type' => 'text' ),
	),
) );

/* Properties page filter labels. */
acf_add_local_field_group( array(
	'key'      => 'group_filter_labels',
	'title'    => 'Filter Labels',
	'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-properties.php' ) ) ),
	'menu_order' => 5,
	'fields'   => array(
		array( 'key' => 'ff_t',  'label' => 'Panel Heading',   'name' => 'flt_title',    'type' => 'text' ),
		array( 'key' => 'ff_p',  'label' => 'Purpose Label',   'name' => 'flt_purpose',  'type' => 'text' ),
		array( 'key' => 'ff_ty', 'label' => 'Type Label',      'name' => 'flt_type',     'type' => 'text' ),
		array( 'key' => 'ff_lo', 'label' => 'Location Label',  'name' => 'flt_location', 'type' => 'text' ),
		array( 'key' => 'ff_pr', 'label' => 'Price Label',     'name' => 'flt_price',    'type' => 'text' ),
		array( 'key' => 'ff_ar', 'label' => 'Area Label',      'name' => 'flt_area',     'type' => 'text' ),
		array( 'key' => 'ff_so', 'label' => 'Sort Label',      'name' => 'flt_sort',     'type' => 'text' ),
		array( 'key' => 'ff_nt', 'label' => 'Footnote',        'name' => 'flt_note',     'type' => 'text' ),
	),
) );

/* Home page search-bar labels. */
acf_add_local_field_group( array(
	'key'      => 'group_home_search',
	'title'    => 'Search Bar Labels',
	'location' => array( array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'yadukul-home' ) ) ),
	'menu_order' => 9,
	'fields'   => array(
		array( 'key' => 'hs_p',  'label' => 'Purpose Label',       'name' => 'sb_purpose',      'type' => 'text' ),
		array( 'key' => 'hs_pa', 'label' => 'Purpose "any" option','name' => 'sb_purpose_any',  'type' => 'text' ),
		array( 'key' => 'hs_t',  'label' => 'Type Label',          'name' => 'sb_type',         'type' => 'text' ),
		array( 'key' => 'hs_ta', 'label' => 'Type "any" option',   'name' => 'sb_type_any',     'type' => 'text' ),
		array( 'key' => 'hs_l',  'label' => 'Location Label',      'name' => 'sb_location',     'type' => 'text' ),
		array( 'key' => 'hs_la', 'label' => 'Location "any" option','name' => 'sb_location_any','type' => 'text' ),
		array( 'key' => 'hs_b',  'label' => 'Budget Label',        'name' => 'sb_budget',       'type' => 'text' ),
		array( 'key' => 'hs_ba', 'label' => 'Budget "any" option', 'name' => 'sb_budget_any',   'type' => 'text' ),
		array( 'key' => 'hs_go', 'label' => 'Search Button',       'name' => 'sb_button',       'type' => 'text' ),
	),
) );
