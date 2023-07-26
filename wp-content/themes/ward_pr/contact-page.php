 <!-- Template Name: Contact Page -->
 <?php get_header(); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_content text-white">
                    <h2> <?php the_title(); ?>  </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="contact" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section_title mb-md-4 mb-2">
                    <div class="section_left">
                        <h6><span>सम्पर्क</span></h6>
                    </div>
                    <div class="py-2">
                        <h2>मद्दतको आवश्यकता पर्दा हामीसँग जोडिन सक्नुहुन्छ!

                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="contact-info-div blue0 p-lg-5 p-3 d-flex justify-content-center h-100 flex-column">
                    <div class="contact-info-list d-flex flex-lg-row flex-column mb-5 align-items-center text-md-left text-center">
                        <div class="contact-info-img">
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        </div>
                        <div class="contact-inof-text">
                            <strong>ठेगाना</strong>
                            <p><?php the_field('address',79) ?></p>
                        </div>
                    </div>
                    <div class="contact-info-list d-flex flex-lg-row flex-column mb-5 align-items-center text-md-left text-center">
                        <div class="contact-info-img">
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                        <div class="contact-inof-text">
                            <strong>
                                फोन नं.</strong>
                            <p><?php the_field('phone_number1',79) ?></p>
                        </div>
                    </div>
                    <div class="contact-info-list d-flex flex-lg-row flex-column text-md-left text-center">
                        <div class="contact-info-img">
                            <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                        </div>
                        <div class="contact-inof-text">
                            <strong>ईमेल</strong>
                            <p><?php the_field('email1',79) ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="form-panel">
                    <div class="mb-3">
                        <h3>कुनै सन्देश</h3>
                    </div>
                    <!-- <div class="form_contact">
                        <div class="form-group">
                            <input type="text" class=" form-control" placeholder="पुरा नाम">
                        </div>
                        <div class="form-group">
                            <input type="email" class=" form-control" placeholder="इ-मेल">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class=" form-control">सन्देश</textarea>
                        </div>
                        
                        <button class="contact_btn" type="submit">पठाउनुस</button>
                    </div> -->
                    <?php the_field('contact_form') ?>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="div_map">
<?php the_field('map') ?>
</div>
<?php get_footer(); ?>