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
