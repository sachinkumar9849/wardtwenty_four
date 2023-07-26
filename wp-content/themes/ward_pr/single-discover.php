<?php get_header(); ?>
 <section class="bg_img banner position-relative"
     style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

            </div>
            <div class="col-lg-4">
            <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'testimonial_panal.php'; ?>
<?php get_footer(); ?>