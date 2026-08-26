<?php
/**
 * Template Name: Property Details
 *
 * Legacy template from the static site: it showed one hard-coded example
 * property. Real listings now live in the Property post type and each has its
 * own page (single-property.php), so this template simply forwards visitors to
 * the full listing rather than serving a stale duplicate.
 *
 * The original static markup is kept in git history if it is ever needed.
 */
wp_safe_redirect( home_url( '/properties/' ), 301 );
exit;
