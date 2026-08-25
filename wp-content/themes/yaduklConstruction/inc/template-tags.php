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
