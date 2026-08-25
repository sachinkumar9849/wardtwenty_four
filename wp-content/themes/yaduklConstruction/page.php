<?php
/**
 * Generic page/post template: the site chrome from the static design
 * wrapped around WordPress content.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.svg" type="image/svg+xml">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header>
    <nav class="navbar navbar-expand-xl navbar-main fixed-top" id="mainNav" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Yadukul Real Estate and Construction logo" width="44" height="44">
          <span class="brand-text">
            <strong>YADUKUL</strong>
            <small>Real Estate &amp; Construction</small>
          </span>
        </a>
      </div>
    </nav>
  </header>

  <main id="main" style="padding-top:120px; padding-bottom:60px;">
    <div class="container">
      <?php
      while ( have_posts() ) :
          the_post();
          ?>
          <h1 class="mb-4"><?php the_title(); ?></h1>
          <div class="entry-content"><?php the_content(); ?></div>
          <?php
      endwhile;
      ?>
    </div>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
