<?php get_header(); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h2> <?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content() ?> <?php endwhile;
                                        else : ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>