 <!-- Template Name: Profile Page -->
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
<!-- <section class="nepal_information-page bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-6">
                        <div class="nepal_information-block bg_blue text-lg-right text-center bg_black text-white">
                            <div class="mb-3">
                                <h5>वडाको विवरण</h5>
                            </div>
                            <h1> कीर्तिपुर नगरपालिका वडा नं ७</h1>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nepal_information-img position-relative">
                            <img src="https://omgnepal.com/wp-content/uploads/2018/04/4030908471_43bd3fc2d3_b.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="about_page padding bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title ">
                    <div class="section_left">
                        <h6><span>ललितपुर महानगरपालिका वडा नं २४</span></h6>
                    </div>
                    <div class="pt-2">
                        <h3>वडाको परिचय
                        </h3>
                    </div>
                   
                    <div class="readmore__content mb-md-4 mb-0">
                    <?php the_field("summary", 75); ?>
                         </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="about_page-div">
                        <img src="<?php
                        $image = get_field("image");
                        echo $image["url"];
                        ?>" alt="about image" class="img-fluid">
                    </div>
                    <div class="profile_title d-md-block d-none">
                        <h2>वडा नं २४ को विवरण</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<section class="profile section-team img_before">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                           <?php the_content(); ?>  <?php
                endwhile;
            else:
                 ?>
                           
                            <?php
            endif; ?>
                
                                <!-- <div class="row">
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    </div>
</section>


<?php include "testimonial_panal.php"; ?>

<?php get_footer(); ?>
