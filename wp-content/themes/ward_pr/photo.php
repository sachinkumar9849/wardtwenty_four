<?php include 'header.php'; ?>

<?php get_header(); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white position-relative text-center">
                    <h2> <?php the_title(); ?> </h2>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'testimonial_panal.php'; ?>
<?php include 'footer.php'; ?>