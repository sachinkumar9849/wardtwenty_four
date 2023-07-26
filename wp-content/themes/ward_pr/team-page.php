 <!-- Template Name: Team Page -->
 <?php get_header(); ?>

 <section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="banner_content text-white">
                     <h2> टोली </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <div id="about_home" class="padding bg_gray">
     <div class="container">



         <div class="row">
             <div class="col-lg-8 mx-auto">
                 <div class="section_title text-center">
                     <h5>प्रतिनिधी</h5>

                     <div class="mt-2">
                         <h1>जन प्रतिनिधी</h1>
                     </div>



                 </div>
             </div>
         </div>

         <div class="row">
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'team',
                    'orderby' => array(
                        'meta_key' => 'bar',
                        'order' => 'DESC',
                    ),
                    'category_name' => 'board',
                    'posts_per_page' => 1,
                    'paged' => $paged,

                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-4 col-md-6 mx-auto mb-4">
                     <div class="membre">
                         <div class="img">
                             <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                         </div>
                         <div class="info text-center">
                             <h5 class="name"><?php the_title() ?></h5>
                             <p class="job"><?php the_field('designation') ?></p>
                         </div>
                         <div class="overly left">
                             <div class="middle">
                                 <h5 class="name"><?php the_title() ?></h5>
                                 <p class="job"><?php the_field('designation') ?></p>
                                 <p class="text">
                                     <?php the_field('phone_number') ?>
                                 </p>

                                 <div class="social-icones">
                                     <a href="#" class="icon">
                                         <i class="fab fa-facebook-f"></i>
                                     </a>
                                     <a href="#" class="icon">
                                         <i class="fab fa-twitter"></i>
                                     </a>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
         </div>
         <div class="row">
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'team',
                    'orderby' => array(
                        'meta_key' => 'bar',
                        'order' => 'DESC',
                    ),
                    'category_name' => 'board',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                    'offset' => 1,

                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="membre">
                         <div class="img">
                             <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                         </div>
                         <div class="info text-center">
                             <h5 class="name"><?php the_title() ?></h5>
                             <p class="job"><?php the_field('designation') ?></p>
                         </div>
                         <div class="overly left">
                             <div class="middle">
                                 <h5 class="name"><?php the_title() ?></h5>
                                 <p class="job"><?php the_field('designation') ?></p>
                                 <p class="text">
                                     <?php the_field('phone_number') ?>
                                 </p>

                                 <div class="social-icones">
                                     <a href="#" class="icon">
                                         <i class="fab fa-facebook-f"></i>
                                     </a>
                                     <a href="#" class="icon">
                                         <i class="fab fa-twitter"></i>
                                     </a>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
         </div>
     </div>
 </div>
 <div id="about_home" class="padding ">
     <div class="container">



         <div class="row">
             <div class="col-lg-8 mx-auto">
                 <div class="section_title text-center">


                     <div class="mt-2">
                         <h1>वडाका कर्मचारी</h1>
                     </div>



                 </div>
             </div>
         </div>


         <div class="row">
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'team',
                    'orderby' => array(
                        'meta_key' => 'bar',
                        'order' => 'DESC',
                    ),
                    'category_name' => 'staff',
                    'posts_per_page' => 100,
                    'paged' => $paged,


                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="membre">
                         <div class="img">
                             <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                         </div>
                         <div class="info text-center">
                             <h5 class="name"><?php the_title() ?></h5>
                             <p class="job"><?php the_field('designation') ?></p>
                         </div>
                         <div class="overly left">
                             <div class="middle">
                                 <h5 class="name"><?php the_title() ?></h5>
                                 <p class="job"><?php the_field('designation') ?></p>
                                 <p class="text">
                                     <?php the_field('phone_number') ?>
                                 </p>

                                 <div class="social-icones">
                                     <a href="#" class="icon">
                                         <i class="fab fa-facebook-f"></i>
                                     </a>
                                     <a href="#" class="icon">
                                         <i class="fab fa-twitter"></i>
                                     </a>

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
         </div>
     </div>
 </div>
 <?php include 'testimonial_panal.php'; ?>
 <?php get_footer(); ?>