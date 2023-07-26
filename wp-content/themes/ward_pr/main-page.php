 <!-- Template Name: Home Page -->
 <?php get_header(); ?>
 <section class="slider_homepage p-0">
     <div class="slider stick-dots">

         <?php
            $images = get_field('image_slider');
            if ($images) : ?>
             <?php foreach ($images as $image) : ?>
                 <div class="slide">
                     <div class="slide__img">
                         <img src="" data-lazy="<?php echo $image['url']; ?>" class="full-image animated" data-animation-in="zoomInImage" />
                     </div>
                     <div class="container h-100">
                         <div class="row h-100">
                             <div class="col-lg-7 h-100 d-flex align-items-center">
                                 <div class="slide__content">
                                     <div class="slide__content--headings d-none">

                                         <h2 class="animated" data-animation-in="fadeInRight"><?php bloginfo('name'); ?>
                                         </h2>

                                         <div class="btn_wrap">
                                             <a href="<?php echo get_page_link(21); ?>" class="bg_blue animated btn mr-3" data-animation-in="fadeInRight">
                                                 थप पढ्नुहोस्
                                                 <div class="arrow"></div>
                                             </a>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-5 h-100">
                                 <div class="banner-bar position-relative">
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             <?php endforeach; ?>
         <?php endif; ?>

     </div>
     <a href="#about" class="scroll-down" address="true"></a>
 </section>
 <div class="tax bg_gray">
     <div class="container">
         <div class="row no-gutters">
             <div class="col-lg-3">
                 <div class="tax-div blue1 text-center">
                 <a href="<?php echo get_page_link(238); ?>">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/icon/taxes.png" alt="tax" class="img-fluid">
                         <h3>दर र शुल्क</h3>
                     </a>
                   
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="tax-div blu2 text-center">
                     <a href="<?php echo get_page_link(246); ?>">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/icon/complain.svg" alt="tax" class="img-fluid">
                         <h3>नागरिक बडापत्र</h3>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="tax-div blu3 text-center">
                 <a href="<?php echo get_page_link(250); ?>">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/icon/buget.png" alt="tax" class="img-fluid">
                         <h3>बार्षिक बजेट</h3>
                     </a>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="tax-div blu4 text-center">
                     <a href="<?php echo get_page_link(79); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/icon/report.png" alt="tax" class="img-fluid">
                         <h3>उजुरी</h3>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>



 <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/banner/team.png" alt=""> -->
 <div id="about_home" class="padding bg_gray">
     <div class="container">
         <div class="row">
             <div class="col-lg-4">
                 <div class="about_div text-white p-lg-5 p-4 blue0">
                     <div class="section_title mb-md-4 mb-2">
                         <div class="section_left">
                             <h6><span>हाम्रो बारेमा</span></h6>
                         </div>

                         <div class="">
                             <h2>परिचय
                             </h2>
                         </div>
                         <?php the_field('summary', 21) ?>
                         <div class="btn_white mt-3">
                             <a href="=" <?php echo get_page_link(21); ?>">थप हेर्नुहोस्</a>
                         </div>

                     </div>
                 </div>
             </div>
             <div class="col-lg-8">
                 <div class="row">
                     <div class="col-12 mt-5">
                         <div class="home_team">
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

                                );
                                $custom_query = new WP_Query($args);
                                while ($custom_query->have_posts()) :
                                    $custom_query->the_post();
                                    $postid = get_the_ID();
                                ?>
                                 <div class="home_team-item">
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

             </div>
         </div>
     </div>
 </div>
 <section id="destination" class="destination pb-0 position-relative">
     <div class="container-fluid p-0">
         <div class="row">
             <div class="col-lg-5 mx-auto ">

                 <div class="section_title text-center mb-md-4 mb-2">
                     <div class="section_left">
                         <h6><span>ललितपुर महानगरपालिकाको वडा नं २४</span></h6>
                     </div>

                     <div class="py-2">
                         <h2>हाम्रो कला र संस्कृति
                             </span></h2>
                     </div>


                 </div>
             </div>
         </div>
         <div class="row no-gutters">
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'discover',
                    'orderby' => array(
                        'meta_key' => 'bar',
                        'order' => 'DESC',
                    ),
                    'category_name' => 'discover',
                    'posts_per_page' => 2,

                    'paged' => $paged,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-6 col-sm-6 col-sm-12">
                     
                         <div class="activites_item">
                             <div class="blog_block position-relative">
                                 <div class="blog_img">
                                     <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                                 </div>
                                 <div class="blog_content text-white d-flex flex-column justify-content-end w-100  h-100 text-white">

                                     <h3><?php the_title() ?>
                                     </h3>

                                 </div>
                                 <!-- <div class="portfolio-hover-content border_sub">
                                     <a href="" class="btn btn-danger"><span>थप जानकारी</span></a>

                                 </div> -->

                             </div>
                         </div>
                   

                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
             <!-- second row start  -->
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'discover',
                    'orderby' => array(
                        'meta_key' => 'bar',
                        'order' => 'DESC',
                    ),
                    'category_name' => 'discover',
                    'posts_per_page' => 3,
                    'offset' => 2,
                    'paged' => $paged,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>

                 <div class="col-lg-4 col-sm-6 col-sm-12">
                     
                         <div class="activites_item">
                             <div class="blog_block position-relative">
                                 <div class="blog_img">
                                     <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid" alt="">
                                 </div>
                                 <div class="blog_content text-white d-flex flex-column justify-content-end w-100  h-100 text-white">

                                     <h3><?php the_title() ?></h3>

                                 </div>
                                 <!-- <div class="portfolio-hover-content border_sub">
                                     <a href="" class="btn btn-danger"><span>थप जानकारी</span></a>

                                 </div> -->
                             </div>
                         </div>
                   
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>

             <!-- second row end  -->
         </div>

     </div>
 </section>
 <div id="news_div" class="padding">
     <div class="container">
         <div class="col-lg-7 mx-auto text-center">
             <div class="section_title text-center mb-md-4 mb-2">
                 <div class="section_left">
                     <h6><span>कार्यक्रमहरुको खबर</span></h6>
                 </div>
                 <div class="py-2">
                     <h2>समाचार
                     </h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'news',
                    'orderby' => 'date',
                    'category_name' => 'news',
                    'posts_per_page' => 1,
                    'paged' => $paged,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
                 <div class="col-lg-6">
                     <div class="news_wrapp position-relative">
                         <div class="news_img">
                             <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">

                         </div>
                         <div class="new_text">
                             <div class="mb-2">
                                 <a href="<?php the_permalink() ?>">
                                     <h3><?php the_title() ?></h3>
                                 </a>
                             </div>
                             <p><?php the_content() ?></p>
                         </div>
                         <div class="new_data">
                             <h6><strong><?php the_field('date') ?></strong><span><?php the_field('month') ?></span></h6>
                         </div>
                     </div>
                 </div>
             <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>

             <!-- new 6 column end  -->
             <div class="col-lg-6">
                 <div class="news_right-block">
                     <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'news',
                            'orderby' => 'date',
                            'category_name' => 'news',
                            'posts_per_page' => 3,
                            'paged' => $paged,
                        );
                        $custom_query = new WP_Query($args);
                        while ($custom_query->have_posts()) :
                            $custom_query->the_post();
                            $postid = get_the_ID();
                        ?>
                         <div class="news_list-div d-flex align-items-center mb-4">
                             <div class="new_data-right">
                                 <h6><strong><?php the_field('date') ?></strong><span><?php the_field('month') ?></span></h6>
                             </div>
                             <div class="news_right-title ml-3">
                                 <a href="<?php the_permalink() ?>">
                                     <h4><?php the_title() ?></h4>
                                 </a>
                             </div>
                         </div>
                     <?php endwhile; ?>
                     <?php wp_reset_postdata(); ?>

                     <!-- <div class="news_list-div d-flex align-items-center mb-4">
                         <div class="new_data-right">
                             <h6><strong>20</strong><span>मंसिर</span></h6>
                         </div>
                         <div class="news_right-title ml-3">
                             <a href="">
                                 <h4>वडा नम्बर ६ कला, संस्कृति तथा पर्यटन प्रवर्द्धन समिति पुनर्गठन कार्यक्रम</h4>
                             </a>
                         </div>
                     </div>
                     <div class="news_list-div d-flex align-items-center mb-4">
                         <div class="new_data-right">
                             <h6><strong>20</strong><span>मंसिर</span></h6>
                         </div>
                         <div class="news_right-title ml-3">
                             <a href="">
                                 <h4>वडा नम्बर ६ कला, संस्कृति तथा पर्यटन प्रवर्द्धन समिति पुनर्गठन कार्यक्रम</h4>
                             </a>
                         </div>
                     </div> -->
                     <div class="full_btn">
                         <a href="">सबै हेर्नुहोस्</a>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>

 <div id="work_home" class="news blue0 padding">
     <div class="container-fluid p-0">
         <div class="row">
             <div class="col-lg-3 blue0">
                 <div class="section_title d-flex justify-content-center h-100 flex-column pl-5">
                     <div class="section_left mb-2">
                         <h6><span>वडा गतिविधि</span></h6>
                     </div>
                     <div class="text-white">
                         <h2>
                             हाम्रो काम
                         </h2>
                     </div>
                 </div>
             </div>
             <div class="col-lg-9">
                 <div class="work_slider">
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
                         <div class="work_item">
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
     </div>
 </div>


 <?php include 'testimonial_panal.php'; ?>
 <?php get_footer(); ?>