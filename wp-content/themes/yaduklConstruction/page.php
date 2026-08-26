<?php
/**
 * Generic page/post template: WordPress content inside the shared site chrome.
 */
get_header();
?>
    <div style="padding-top:120px; padding-bottom:60px;">
      <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="mb-4"><?php the_title(); ?></h1>
          <div class="entry-content"><?php the_content(); ?></div>
        <?php endwhile; ?>
      </div>
    </div>
<?php get_footer(); ?>
