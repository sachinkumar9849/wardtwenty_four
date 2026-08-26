<?php
/**
 * Site head and main navigation. Used by every template via get_header().
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.svg" type="image/svg+xml">
  <?php $y_desc = y_meta_description(); if ( $y_desc ) : ?>
  <meta name="description" content="<?php echo esc_attr( $y_desc ); ?>">
  <meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
  <meta property="og:description" content="<?php echo esc_attr( $y_desc ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <a href="#main" class="visually-hidden-focusable position-absolute top-0 start-0 m-2 p-2 bg-white"><?php y_uix( 'ui_skip', 'Skip to main content' ); ?></a>

  <header>
    <nav class="navbar navbar-expand-xl navbar-main fixed-top" id="mainNav" aria-label="Main navigation">
      <div class="container">

        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( y_logo() ); ?>" alt="<?php echo esc_attr( y_brand() . ' logo' ); ?>" width="44" height="44">
          <!-- <span class="brand-text">
            <strong><?php echo esc_html( y_brand() ); ?></strong>
            <small><?php echo esc_html( y_brand_tagline() ); ?></small>
          </span> -->
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation menu">
          <i class="bi bi-list" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav mx-auto">
            <?php foreach ( y_nav_items() as $item ) :
                $active = y_is_current( $item['url'] ); ?>
            <li class="nav-item"><a class="nav-link<?php echo $active ? ' active' : ''; ?>"<?php echo $active ? ' aria-current="page"' : ''; ?> href="<?php echo esc_url( y_link( $item['url'] ) ); ?>"<?php if ( ! empty( $item['label_np'] ) ) : ?> data-np="<?php echo esc_attr( $item['label_np'] ); ?>"<?php endif; ?>><?php echo esc_html( $item['label'] ); ?></a></li>
            <?php endforeach; ?>
          </ul>

          <div class="nav-actions">
            <div class="lang-switch" role="group" aria-label="Select language">
              <button type="button" class="lang-btn active" data-lang="en" aria-pressed="true">EN</button>
              <span aria-hidden="true">|</span>
              <button type="button" class="lang-btn" data-lang="np" aria-pressed="false">नेपाली</button>
            </div>
            <a href="<?php echo esc_url( y_link( y_site( 'header_btn_url' ), '/contact/' ) ); ?>" class="btn btn-accent"<?php if ( y_site( 'header_btn_np' ) ) : ?> data-np="<?php echo esc_attr( y_site( 'header_btn_np' ) ); ?>"<?php endif; ?>><?php echo esc_html( y_site( 'header_btn_text', 'Get Started' ) ); ?></a>
          </div>
        </div>

      </div>
    </nav>
  </header>

  <main id="main">
