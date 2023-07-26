 <!-- Template Name: Karmachari Page -->
 <?php get_header(); ?>
 <section class="banner" style="background-image: url(img/banner.jpg);">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="banner_content text-white">
                     <h2> कर्मचारी </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <div id="about_home" class="padding bg_gray">
     <div class="container">
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
                        'posts_per_page' => 12,
                        'paged' => $paged,
                    );
                    $custom_query = new WP_Query($args);
                    while ($custom_query->have_posts()) :
                        $custom_query->the_post();
                        $postid = get_the_ID();
                    ?>
             <div class="col-lg-4">
                 <div class="membre">
                     <div class="img">
                     <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                     </div>
                     <div class="info">
                         <h5 class="name"><?php the_title() ?></h5>
                         <p class="job">वडा अध्यक्ष</p>
                     </div>
                     <div class="overly left">
                         <div class="middle">
                             <h5 class="name">साथै उहाँहरुको</h5>
                             <p class="job">वडा अध्यक्ष</p>
                             <p class="text">
                                 01-2102031
                             </p>

                             <div class="social-icones">
                                 <a href="#" class="icon">
                                     <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                 </a>
                                 <a href="#" class="icon">
                                     <i class="fab fa-twitter" aria-hidden="true"></i>
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


 <?php get_footer(); ?>