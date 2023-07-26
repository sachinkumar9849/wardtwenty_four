 <!-- Template Name: About Page -->
 <?php get_header(); ?>
 <section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="banner_content text-white">
                     <h2><?php the_title(); ?>
                     </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <div class="about_page padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <div class="section_title ">
                     <div class="section_left">
                         <h6><span>ललितपुर महानगरपालिका वडा नं २४</span></h6>
                     </div>
                     <div class="pt-2">
                         <h2>वडाको परिचय
                         </h2>
                     </div>
                     <div class=" mb-md-4 mb-0">
                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                 <?php the_content() ?> <?php endwhile;
                                                else : ?>

                         <?php endif; ?>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="about_page-div">
                     <img src="<?php $image = get_field('image');
                                echo $image['url']; ?>" class="img-fluid pl-0" alt="">
                 </div>
             </div>
         </div>
     </div>
 </div>
<p></p>
 <?php include 'testimonial_panal.php'; ?>

 <?php get_footer(); ?>
 