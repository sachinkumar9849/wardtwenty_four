 <!-- Template Name: News Page -->
 <?php get_header(); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h2> <?php the_title(); ?> </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="news_page" class="padding">
    <div class="container">

        <div class="row">
        <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'news',
                    'orderby' => 'date',
                    'category_name' => 'news',
                    'posts_per_page' => 100,
                    'paged' => $paged,
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    $postid = get_the_ID();
                ?>
            <div class="col-lg-4">
                <div class="news_wrapp position-relative">
                    <div class="news_img">
                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url() ?>" alt="">
                    </div>
                    <div class="new_text">
                        <div class="mb-2">
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                        </div>

                    </div>
                    <div class="new_data">
                        <h6><strong><?php the_field('date') ?></strong><span><?php the_field('month') ?></span></h6>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
         

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