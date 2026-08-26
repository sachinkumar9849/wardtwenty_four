<?php
/**
 * Generic section fields for the inner pages.
 *
 * Most sections share three shapes — a heading block, a grid of cards, and a
 * call-to-action band — so they are declared here as data rather than written
 * out one by one.
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

/**
 * $sections: array of array( prefix, Label, type, has_cards )
 *   type: 'head' = eyebrow/title/subtitle, 'cta' = title/text/button
 */
function y_register_sections( $template, $sections ) {
	$slug   = str_replace( array( 'page-', '.php' ), '', $template );
	$fields = array();

	foreach ( $sections as $s ) {
		list( $prefix, $label, $type, $cards ) = $s;
		$k = 'sx_' . $slug . '_' . $prefix;

		$fields[] = array( 'key' => $k . '_tab', 'label' => $label, 'type' => 'tab' );

		if ( $type === 'cta' ) {
			$fields[] = array( 'key' => $k . '_t',  'label' => 'Heading',     'name' => $prefix . '_title',    'type' => 'text' );
			$fields[] = array( 'key' => $k . '_x',  'label' => 'Text',        'name' => $prefix . '_text',     'type' => 'textarea', 'rows' => 2 );
			$fields[] = array( 'key' => $k . '_b',  'label' => 'Button Text', 'name' => $prefix . '_btn_text', 'type' => 'text' );
			$fields[] = array( 'key' => $k . '_bu', 'label' => 'Button Link', 'name' => $prefix . '_btn_url',  'type' => 'text' );
		} else {
			$fields[] = array( 'key' => $k . '_e', 'label' => 'Eyebrow',  'name' => $prefix . '_eyebrow', 'type' => 'text' );
			$fields[] = array( 'key' => $k . '_t', 'label' => 'Heading',  'name' => $prefix . '_title',   'type' => 'text' );
			$fields[] = array( 'key' => $k . '_s', 'label' => 'Subtitle', 'name' => $prefix . '_sub',     'type' => 'textarea', 'rows' => 2 );
		}

		if ( $cards ) {
			$fields[] = array(
				'key' => $k . '_c', 'label' => 'Cards', 'name' => $prefix . '_cards',
				'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add card',
				'sub_fields' => array(
					array( 'key' => $k . '_c_n', 'label' => 'Small Label',    'name' => 'number_label', 'type' => 'text' ),
					array( 'key' => $k . '_c_i', 'label' => 'Bootstrap Icon', 'name' => 'icon',         'type' => 'text' ),
					array( 'key' => $k . '_c_t', 'label' => 'Title',          'name' => 'title',        'type' => 'text' ),
					array( 'key' => $k . '_c_x', 'label' => 'Text',           'name' => 'text',         'type' => 'textarea', 'rows' => 3 ),
					array( 'key' => $k . '_c_m', 'label' => 'Image URL',      'name' => 'image_url',    'type' => 'url' ),
					array( 'key' => $k . '_c_u', 'label' => 'Link',           'name' => 'url',          'type' => 'text' ),
				),
			);
		}
	}

	acf_add_local_field_group( array(
		'key'        => 'g_sx_' . $slug,
		'title'      => 'Page Sections',
		'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $template ) ) ),
		'menu_order' => 2,
		'fields'     => $fields,
	) );
}

y_register_sections( 'page-rent.php', array(
	array( 'cat',  'Rental Categories', 'head', true ),
	array( 'list', 'Rental Listings',   'head', false ),
	array( 'how',  'How Renting Works', 'head', true ),
	array( 'cta',  'Call To Action',    'cta',  false ),
) );

y_register_sections( 'page-construction.php', array(
	array( 'serv', 'Services',        'head', false ),  // service_cards already exists
	array( 'why',  'Why Build With Us','head', true ),
	array( 'proc', 'Process',         'head', true ),
	array( 'gal',  'Project Gallery', 'head', true ),
	array( 'stat', 'Stats Band',      'head', true ),
	array( 'cta',  'Call To Action',  'cta',  false ),
) );

y_register_sections( 'page-engineering.php', array(
	array( 'serv', 'Services',     'head', false ),  // service_cards already exists
	array( 'proc', 'Design Process','head', true ),
	array( 'deliv','Deliverables', 'head', true ),
	array( 'cta',  'Call To Action','cta', false ),
) );

y_register_sections( 'page-contact.php', array(
	array( 'info', 'Contact Details', 'head', false ),
	array( 'form', 'Message Form',    'head', false ),
	array( 'map',  'Map',             'head', false ),
	array( 'cta',  'Call To Action',  'cta',  false ),
) );

y_register_sections( 'page-about.php', array(
	array( 'val', 'Values Heading',   'head', false ),  // value_cards already exists
	array( 'why', 'Why Choose Us',    'head', true ),
	array( 'team','Team Heading',     'head', false ),  // team_cards already exists
	array( 'cta', 'Call To Action',   'cta',  false ),
) );

y_register_sections( 'page-land-plotting.php', array(
	array( 'map', 'Map', 'head', false ),
) );

y_register_sections( 'page-properties.php', array(
	array( 'empty', 'No-Results Message', 'head', false ),
) );

/** Split section: image + badge + checklist + button. */
function y_register_split( $template, $prefix, $label, $with_stats = false ) {
	$slug = str_replace( array( 'page-', '.php' ), '', $template );
	$k    = 'sp_' . $slug . '_' . $prefix;
	$f = array(
		array( 'key' => $k . '_tab', 'label' => $label, 'type' => 'tab' ),
		array( 'key' => $k . '_e',  'label' => 'Eyebrow',   'name' => $prefix . '_eyebrow', 'type' => 'text' ),
		array( 'key' => $k . '_t',  'label' => 'Heading',   'name' => $prefix . '_title',   'type' => 'text' ),
		array( 'key' => $k . '_s',  'label' => 'Text',      'name' => $prefix . '_sub',     'type' => 'textarea', 'rows' => 4 ),
		array( 'key' => $k . '_i',  'label' => 'Image URL', 'name' => $prefix . '_image_url', 'type' => 'url' ),
		array( 'key' => $k . '_bn', 'label' => 'Badge Top',    'name' => $prefix . '_badge_number', 'type' => 'text' ),
		array( 'key' => $k . '_bl', 'label' => 'Badge Bottom', 'name' => $prefix . '_badge_label',  'type' => 'text' ),
		array( 'key' => $k . '_l',  'label' => 'Checklist', 'name' => $prefix . '_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add point',
			'sub_fields' => array( array( 'key' => $k . '_li', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ) ),
		array( 'key' => $k . '_b',  'label' => 'Button Text', 'name' => $prefix . '_btn_text', 'type' => 'text' ),
		array( 'key' => $k . '_bu', 'label' => 'Button Link', 'name' => $prefix . '_btn_url',  'type' => 'text' ),
	);
	if ( $with_stats ) {
		$f[] = array( 'key' => $k . '_st', 'label' => 'Stats Band', 'name' => 'stats_band', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add stat',
			'sub_fields' => array(
				array( 'key' => $k . '_st_n', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
				array( 'key' => $k . '_st_u', 'label' => 'Suffix', 'name' => 'suffix', 'type' => 'text', 'instructions' => 'e.g. +, k, %' ),
				array( 'key' => $k . '_st_l', 'label' => 'Label',  'name' => 'label',  'type' => 'text' ),
			) );
	}
	acf_add_local_field_group( array(
		'key'        => 'g_sp_' . $slug . '_' . $prefix,
		'title'      => $label,
		'location'   => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $template ) ) ),
		'menu_order' => 3,
		'fields'     => $f,
	) );
}

y_register_split( 'page-construction.php', 'whyb', 'Why Build With Us', true );
y_register_split( 'page-engineering.php',  'proc2', 'Design Process Panel' );

/* Small standalone strings. */
acf_add_local_field_group( array(
	'key'      => 'g_prop_empty',
	'title'    => 'No-Results Message',
	'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-properties.php' ) ) ),
	'menu_order' => 3,
	'fields'   => array(
		array( 'key' => 'pe_t', 'label' => 'Heading', 'name' => 'empty_title', 'type' => 'text' ),
		array( 'key' => 'pe_x', 'label' => 'Text',    'name' => 'empty_text',  'type' => 'textarea', 'rows' => 2 ),
	),
) );
