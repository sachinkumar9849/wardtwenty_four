<?php get_header(); ?>
<section class="bg_img banner position-relative" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h1><?php the_title(); ?> </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="notice" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 notice-main-div mx-auto">
                <div class="section_title mb-md-3 mb-2">
                    <div class="section_left">
                        <h6><span><?php the_field('date') ?> <?php the_field('month') ?> <?php the_field('year') ?></span></h6>
                    </div>

                    <div class="py-2">
                        <h2><?php the_title() ?>
                        </h2>
                    </div>
                   

                </div>
                <div class="notice-detail">
                    <img src="<?php $image = get_field('image');
                                echo $image['url']; ?>" class="img-fluid" alt="">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content() ?> <?php endwhile;
                                            else : ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>