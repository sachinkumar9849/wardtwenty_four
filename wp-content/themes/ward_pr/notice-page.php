 <!-- Template Name: Notice Page -->
 <?php get_header(); ?>
 <section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="banner_content text-white">
                     <h2> <?php the_title(); ?>
                     </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <div id="notice" class="padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-10 notice-main-div mx-auto">
                 <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'notice',
                        'orderby' => 'date',
                        'category_name' => 'notice',
                        'posts_per_page' => 100,
                        'paged' => $paged,
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) :
                        $custom_query->the_post();
                        $postid = get_the_ID();
                    ?>
                     <div class="notice_wrapp d-flex flex-md-row flex-column align-items-center mb-4">
                         <div class="notice_date text-center mb-lg-0 mb-3">
                             <span class="date-month second_font"> <b class="mr-2"> <?php the_field('date') ?></b><span class="month second_font"> <?php the_field('month') ?> <?php the_field('year') ?></span> </span>

                         </div>
                         <div class="notice_img_title d-flex flex-md-row flex-column align-items-center text-center">
                             <div class="notice-img mr-3">
                                 <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="img">
                             </div>
                             <div class="notice_title mt-lg-0 mt-3">
                                 <h4><?php the_title() ?></h4>
                             </div>
                             <div class="btn_white mt-3">
                                 <a href="<?php the_permalink() ?>">थप हेर्नुहोस्</a>
                             </div>
                         </div>
                     </div>
                 <?php endwhile; ?>
                 <?php wp_reset_postdata(); ?>

             </div>
         </div>
     </div>
 </div>


 <?php include 'testimonial_panal.php'; ?>

 <?php get_footer(); ?>