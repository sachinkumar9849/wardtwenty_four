<?php
/**
 * "Home Page" admin screen where all front-page content is edited.
 * Uses an options page rather than a normal page so the content is not tied
 * to WordPress' front-page setting.
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Home Page Content',
		'menu_title' => 'Home Page',
		'menu_slug'  => 'yadukul-home',
		'capability' => 'edit_posts',
		'icon_url'   => 'dashicons-admin-home',
		'position'   => 4,
		'redirect'   => false,
	) );
}
