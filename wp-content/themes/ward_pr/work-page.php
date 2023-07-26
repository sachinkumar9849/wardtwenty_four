 <!-- Template Name: Work Page -->
 <?php get_header(); ?>
 <section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="banner_content text-white">
                     <h2> हाम्रो काम </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <div id="work_home" class="news padding">
     <div class="container">
         <div class="row">
             <!-- <div class="col-lg-4 col-md-6 mb-4">
                 <div class="blog_wrap position-relative mb-lg-0 mb-5">
                     <div class="blog_img">
                         <img src="img/news/news03.jpg" class="img-fluid">
                     </div>
                     <div class="blog_content">

                         <a href="blog_detail.php">
                             <h2>कीर्तिपुर नगरपालिका एउटा कला संस्कृतिको शहर हो
                             </h2>
                         </a>
                         <div class="news-one__btn">
                             <a href="news_detail.php">थप पढ्नुहोस् <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                         </div>

                     </div>



                 </div>
             </div> -->
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'work',
                    'orderby' => 'date',
                    'category_name' => 'work',
                    'posts_per_page' => 100,
                    'posts_per_page' => 100,
                    'paged' => $paged,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="blog_wrap position-relative mb-lg-0 mb-5">
                         <div class="blog_img">
                             <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                         </div>
                         <div class="blog_content">

                             <a href="blog_detail.php">
                                 <h2><?php the_title() ?>
                                 </h2>
                             </a>
                             <div class="news-one__btn">
                                 <a href="<?php the_permalink() ?>">थप पढ्नुहोस् <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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