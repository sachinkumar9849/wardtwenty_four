<?php
/**
 * Helpers for reading home-page content.
 *
 * Every getter takes a fallback: the original hard-coded text from the static
 * template. So if a field has not been filled in yet, the page still renders
 * exactly as designed instead of showing a blank space.
 */

/** Get a Home Page option field, falling back to the supplied default. */
function y_get( $name, $fallback = '' ) {
	if ( function_exists( 'get_field' ) ) {
		$v = get_field( $name, 'option' );
		if ( $v !== null && $v !== '' && $v !== false ) {
			return $v;
		}
	}
	return $fallback;
}

/** Echo an escaped field. */
function y_text( $name, $fallback = '' ) {
	echo esc_html( y_get( $name, $fallback ) );
}

/** Echo a field that may contain inline HTML. */
function y_html( $name, $fallback = '' ) {
	echo wp_kses_post( y_get( $name, $fallback ) );
}

/** Echo an escaped URL field, resolving relative paths through home_url(). */
function y_url( $name, $fallback = '' ) {
	$v = y_get( $name, $fallback );
	if ( $v !== '' && strpos( $v, 'http' ) !== 0 && strpos( $v, '#' ) !== 0 && strpos( $v, 'tel:' ) !== 0 && strpos( $v, 'mailto:' ) !== 0 ) {
		$v = home_url( $v );
	}
	echo esc_url( $v );
}

/** Repeater rows, or the supplied fallback array when empty. */
function y_rows( $name, $fallback = array() ) {
	if ( function_exists( 'get_field' ) ) {
		$rows = get_field( $name, 'option' );
		if ( is_array( $rows ) && $rows ) {
			return $rows;
		}
	}
	return $fallback;
}

/** An image field with a URL fallback field, then a hard-coded default. */
function y_image( $name, $url_name = '', $fallback = '' ) {
	$v = y_get( $name );
	if ( ! $v && $url_name ) {
		$v = y_get( $url_name );
	}
	return $v ? $v : $fallback;
}

/**
 * The image for a property card: featured image first, then the URL field.
 */
function y_property_image( $post_id, $size = 'large' ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return get_the_post_thumbnail_url( $post_id, $size );
	}
	if ( function_exists( 'get_field' ) ) {
		$u = get_field( 'image_url', $post_id );
		if ( $u ) {
			return $u;
		}
	}
	return '';
}

/** First term name of a taxonomy, or ''. */
function y_term( $post_id, $tax ) {
	$t = get_the_terms( $post_id, $tax );
	return ( $t && ! is_wp_error( $t ) ) ? $t[0]->name : '';
}

/** First term slug of a taxonomy, or ''. */
function y_term_slug( $post_id, $tax ) {
	$t = get_the_terms( $post_id, $tax );
	return ( $t && ! is_wp_error( $t ) ) ? $t[0]->slug : '';
}

/* -------------------------------------------------------------
 * Site Settings helpers
 * ---------------------------------------------------------- */

/** A Site Settings value with a sensible fallback. */
function y_site( $name, $fallback = '' ) {
	if ( function_exists( 'get_field' ) ) {
		$v = get_field( $name, 'option' );
		if ( $v !== null && $v !== '' && $v !== false ) {
			return $v;
		}
	}
	$defaults = array(
		'phone'       => '+977 9801234567',
		'phone_raw'   => '+9779779801234567',
		'landline'    => '+977 1 4567890',
		'whatsapp'    => '9779801234567',
		'email'       => 'info@yadukul.com.np',
		'email_sales' => 'sales@yadukul.com.np',
	);
	if ( $fallback === '' && isset( $defaults[ $name ] ) ) {
		return $defaults[ $name ];
	}
	return $fallback;
}

/** Gallery image URLs for a property: ACF gallery, then URL rows, then featured image. */
function y_property_gallery( $post_id ) {
	$out = array();
	if ( function_exists( 'get_field' ) ) {
		$g = get_field( 'gallery', $post_id );
		if ( is_array( $g ) ) {
			foreach ( $g as $item ) {
				$out[] = is_array( $item ) ? $item['url'] : $item;
			}
		}
		if ( ! $out ) {
			$rows = get_field( 'gallery_urls', $post_id );
			if ( is_array( $rows ) ) {
				foreach ( $rows as $r ) {
					if ( ! empty( $r['url'] ) ) {
						$out[] = $r['url'];
					}
				}
			}
		}
	}
	if ( ! $out ) {
		$main = y_property_image( $post_id );
		if ( $main ) {
			$out[] = $main;
		}
	}
	return $out;
}

/* -------------------------------------------------------------
 * Page banner helpers (Page Banner field group)
 * ---------------------------------------------------------- */

/** Banner heading: the field, else the page title. */
function y_page_hero_heading() {
	$v = function_exists( 'get_field' ) ? get_field( 'hero_heading' ) : '';
	return $v ? $v : get_the_title();
}

/** Banner intro text. */
function y_page_hero_sub() {
	return function_exists( 'get_field' ) ? (string) get_field( 'hero_subtitle' ) : '';
}

/** Banner image: image field, then URL field. */
function y_page_hero_image() {
	if ( ! function_exists( 'get_field' ) ) {
		return '';
	}
	$v = get_field( 'hero_image' );
	if ( ! $v ) {
		$v = get_field( 'hero_image_url' );
	}
	return (string) $v;
}

/* -------------------------------------------------------------
 * Branding / navigation helpers
 * ---------------------------------------------------------- */

/** Logo URL: the image field, then the URL field, then the bundled SVG. */
function y_logo() {
	$v = y_site( 'logo' );
	if ( ! $v ) {
		$v = y_site( 'logo_url' );
	}
	return $v ? $v : get_template_directory_uri() . '/assets/images/logo.svg';
}

/** Brand name shown next to the logo. */
function y_brand() {
	return y_site( 'brand_name', 'YADUKUL' );
}

/** Small line under the brand name. */
function y_brand_tagline() {
	return y_site( 'brand_tagline', 'Real Estate & Construction' );
}

/** Resolve a stored link: absolute, anchor and mailto/tel pass through. */
function y_link( $url, $fallback = '/' ) {
	$u = $url ? $url : $fallback;
	if ( preg_match( '#^(https?:|//|#|mailto:|tel:)#', $u ) ) {
		return $u;
	}
	return home_url( $u );
}

/** True when $url points at the page currently being viewed. */
function y_is_current( $url ) {
	if ( ! $url || strpos( $url, '#' ) === 0 ) {
		return false;
	}
	$target  = untrailingslashit( wp_parse_url( y_link( $url ), PHP_URL_PATH ) );
	$current = untrailingslashit( wp_parse_url( home_url( add_query_arg( array() ) ), PHP_URL_PATH ) );
	if ( $target === '' ) {
		return is_front_page();
	}
	return $target === $current;
}

/** Main menu rows, falling back to the site's own pages. */
function y_nav_items() {
	$rows = function_exists( 'get_field' ) ? get_field( 'nav_items', 'option' ) : null;
	if ( is_array( $rows ) && $rows ) {
		return $rows;
	}
	return array(
		array( 'label' => 'Home',          'label_np' => 'गृहपृष्ठ',      'url' => '/' ),
		array( 'label' => 'Properties',    'label_np' => 'सम्पत्ति',       'url' => '/properties/' ),
		array( 'label' => 'Land Plotting', 'label_np' => 'जग्गा प्लटिङ',   'url' => '/land-plotting/' ),
		array( 'label' => 'Buildings',     'label_np' => 'भवन',           'url' => '/buildings/' ),
		array( 'label' => 'Rent',          'label_np' => 'भाडा',          'url' => '/rent/' ),
		array( 'label' => 'Construction',  'label_np' => 'निर्माण',        'url' => '/construction/' ),
		array( 'label' => 'Engineering',   'label_np' => 'इन्जिनियरिङ',    'url' => '/engineering/' ),
		array( 'label' => 'About Us',      'label_np' => 'हाम्रो बारेमा',   'url' => '/about/' ),
		array( 'label' => 'Contact',       'label_np' => 'सम्पर्क',        'url' => '/contact/' ),
	);
}

/** Repeater rows from Site Settings (options), always an array. */
function y_get_rows( $name ) {
	if ( function_exists( 'get_field' ) ) {
		$rows = get_field( $name, 'option' );
		if ( is_array( $rows ) ) {
			return $rows;
		}
	}
	return array();
}

/** Meta description for the current view, or '' when there is none. */
function y_meta_description() {
	$d = '';
	if ( is_front_page() ) {
		$d = function_exists( 'get_field' ) ? (string) get_field( 'home_meta_description', 'option' ) : '';
	} elseif ( is_singular() ) {
		$d = function_exists( 'get_field' ) ? (string) get_field( 'meta_description', get_the_ID() ) : '';
		if ( ! $d ) {
			$d = get_the_excerpt();
		}
	}
	if ( ! $d ) {
		$d = get_bloginfo( 'description' );
	}
	return trim( wp_strip_all_tags( $d ) );
}

/* -------------------------------------------------------------
 * Reusable UI labels
 * ---------------------------------------------------------- */

/** A shared button/UI label from Site Settings, with a built-in default. */
function y_label( $name, $default = '' ) {
	$v = function_exists( 'get_field' ) ? get_field( 'lbl_' . $name, 'option' ) : '';
	if ( $v ) {
		return $v;
	}
	$defaults = array(
		'call' => 'Call Now', 'whatsapp' => 'WhatsApp', 'enquiry' => 'Send Enquiry',
		'visit' => 'Book a Site Visit', 'view_details' => 'View Details', 'view_project' => 'View Project',
		'explore' => 'Explore', 'home' => 'Home', 'apply' => 'Apply Filters', 'reset' => 'Reset',
		'search' => 'Search Property', 'found' => 'properties found', 'prev' => 'Previous',
		'next' => 'Next', 'zoom' => 'Click to enlarge',
	);
	if ( isset( $defaults[ $name ] ) ) {
		return $defaults[ $name ];
	}
	return $default;
}

/** Echo a shared label, escaped. */
function y_lbl( $name, $default = '' ) {
	echo esc_html( y_label( $name, $default ) );
}

/** Budget / area / sort options from Site Settings, with sensible defaults. */
function y_ranges( $which ) {
	$rows = function_exists( 'get_field' ) ? get_field( $which, 'option' ) : null;
	if ( is_array( $rows ) && $rows ) {
		return $rows;
	}
	$d = array(
		'price_ranges' => array(
			array( 'label' => 'Under 50 Lakhs',      'value' => '0-5000000' ),
			array( 'label' => '50 Lakhs – 1 Crore',  'value' => '5000000-10000000' ),
			array( 'label' => '1 – 2 Crore',         'value' => '10000000-20000000' ),
			array( 'label' => '2 Crore+',            'value' => '20000000-999999999' ),
		),
		'area_ranges' => array(
			array( 'label' => 'Under 1,000 sq.ft',     'value' => '0-1000' ),
			array( 'label' => '1,000 – 2,500 sq.ft',   'value' => '1000-2500' ),
			array( 'label' => '2,500 – 5,000 sq.ft',   'value' => '2500-5000' ),
			array( 'label' => '5,000 sq.ft+',          'value' => '5000-999999' ),
		),
		'sort_options' => array(
			array( 'label' => 'Newest First' ),
			array( 'label' => 'Price: Low to High' ),
			array( 'label' => 'Price: High to Low' ),
		),
	);
	return isset( $d[ $which ] ) ? $d[ $which ] : array();
}

/** A shared heading/table label from Site Settings, with a default. */
function y_ui( $name, $default ) {
	$v = function_exists( 'get_field' ) ? get_field( $name, 'option' ) : '';
	return $v ? $v : $default;
}

/** Echo a shared heading/table label. */
function y_uix( $name, $default ) {
	echo esc_html( y_ui( $name, $default ) );
}

/** A per-page button label with a default. */
function y_btn( $name, $default ) {
	$v = function_exists( 'get_field' ) ? get_field( $name . '_text' ) : '';
	return $v ? $v : $default;
}

/** A per-page button link with a default. */
function y_btn_url( $name, $default = '/contact/' ) {
	$v = function_exists( 'get_field' ) ? get_field( $name . '_url' ) : '';
	return y_link( $v ? $v : $default );
}
