<?php
/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>


    <section class="page-hero">
      <div class="page-hero-media">
        <img src="<?php echo esc_url( y_page_hero_image() ); ?>" alt="<?php echo esc_attr( y_page_hero_heading() ); ?>" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php y_lbl( 'home' ); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( get_the_title() ); ?></li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <!-- ============ CONTACT DETAILS + FORM ============ -->
    <section class="section" aria-labelledby="contactHeading">
      <div class="container">
        <div class="row g-5">

          <div class="col-lg-4 reveal">
            <span class="eyebrow"><?php echo esc_html( get_field( 'info_eyebrow' ) ); ?></span>
            <h2 class="section-title h3" id="contactHeading"><?php echo esc_html( get_field( 'info_title' ) ); ?></h2>
            <p class="section-sub mb-5"><?php echo esc_html( get_field( 'info_sub' ) ); ?></p>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
              <div>
                <h3><?php echo esc_html( get_field( 'addr_title' ) ); ?></h3>
                <p><?php echo wp_kses_post( nl2br( esc_html( y_site( 'address' ) ) ) ); ?></p>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-telephone-fill" aria-hidden="true"></i></span>
              <div>
                <h3><?php echo esc_html( get_field( 'ci_phone' ) ? get_field( 'ci_phone' ) : 'Phone' ); ?></h3>
                <a href="tel:<?php echo esc_attr( preg_replace( '/\\s+/', '', y_site( 'landline' ) ) ); ?>"><?php echo esc_html( y_site( 'landline' ) ); ?></a>
                <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>"><?php echo esc_html( y_site( 'phone' ) ); ?></a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-whatsapp" aria-hidden="true"></i></span>
              <div>
                <h3><?php y_lbl( 'whatsapp' ); ?></h3>
                <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( y_site( 'phone' ) ); ?></a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-envelope-fill" aria-hidden="true"></i></span>
              <div>
                <h3><?php echo esc_html( get_field( 'ci_email' ) ? get_field( 'ci_email' ) : 'Email' ); ?></h3>
                <a href="mailto:<?php echo esc_attr( y_site( 'email' ) ); ?>"><?php echo esc_html( y_site( 'email' ) ); ?></a>
                <a href="mailto:<?php echo esc_attr( y_site( 'email_sales' ) ); ?>"><?php echo esc_html( y_site( 'email_sales' ) ); ?></a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-clock-fill" aria-hidden="true"></i></span>
              <div>
                <h3><?php echo esc_html( get_field( 'hours_title' ) ); ?></h3>
                <p><?php echo esc_html( y_site( 'hours' ) ); ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 reveal" style="--d:.1s">
            <div class="form-card">
              <h2 class="section-title h3"><?php echo esc_html( get_field( 'form_title' ) ); ?></h2>
              <p class="mb-4"><?php echo esc_html( get_field( 'form_sub' ) ); ?></p>

              <div class="form-message" id="contactSuccess">
                <i class="bi bi-check-circle-fill me-2" aria-hidden="true"></i>
                <?php echo esc_html( get_field( 'form_success' ) ); ?></div>

              <form class="js-validate row g-3" novalidate>
                <div class="col-md-6">
                  <label class="field-label" for="c-name"><?php echo esc_html( get_field( 'lb_name' ) ? get_field( 'lb_name' ) : 'Full Name' ); ?></label>
                  <input type="text" class="form-control" id="c-name" name="name" placeholder="Your full name" required>
                  <div class="invalid-feedback"><?php echo esc_html( get_field( 'er_name' ) ? get_field( 'er_name' ) : 'Please enter your name.' ); ?></div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-phone"><?php echo esc_html( get_field( 'lb_phone' ) ? get_field( 'lb_phone' ) : 'Phone Number' ); ?></label>
                  <input type="tel" class="form-control" id="c-phone" name="phone" placeholder="98XXXXXXXX" pattern="[0-9+ ]{7,15}" required>
                  <div class="invalid-feedback"><?php echo esc_html( get_field( 'er_phone' ) ? get_field( 'er_phone' ) : 'Please enter a valid phone number.' ); ?></div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-email"><?php echo esc_html( get_field( 'lb_email' ) ? get_field( 'lb_email' ) : 'Email Address' ); ?></label>
                  <input type="email" class="form-control" id="c-email" name="email" placeholder="you@example.com" required>
                  <div class="invalid-feedback"><?php echo esc_html( get_field( 'er_email' ) ? get_field( 'er_email' ) : 'Please enter a valid email address.' ); ?></div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-service"><?php echo esc_html( get_field( 'lb_service' ) ? get_field( 'lb_service' ) : 'Service' ); ?></label>
                  <select class="form-select" id="c-service" name="service" required>
                  <option value=""><?php echo esc_html( get_field( 'ph_service' ) ? get_field( 'ph_service' ) : 'Select a service' ); ?></option>
                  <?php foreach ( (array) get_field( 'service_options' ) as $o ) : ?>
                  <option><?php echo esc_html( $o['label'] ); ?></option>
                  <?php endforeach; ?>
                </select>
                  <div class="invalid-feedback"><?php echo esc_html( get_field( 'er_service' ) ? get_field( 'er_service' ) : 'Please choose a service.' ); ?></div>
                </div>
                <div class="col-12">
                  <label class="field-label" for="c-message"><?php echo esc_html( get_field( 'lb_message' ) ? get_field( 'lb_message' ) : 'Message' ); ?></label>
                  <textarea class="form-control" id="c-message" name="message" rows="5" required
                    placeholder="Tell us about your requirement — location, budget, size or timeline."></textarea>
                  <div class="invalid-feedback"><?php echo esc_html( get_field( 'er_message' ) ? get_field( 'er_message' ) : 'Please write a short message.' ); ?></div>
                </div>
                <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
                  <button type="submit" class="btn btn-accent"><?php echo esc_html( get_field( 'form_submit' ) ? get_field( 'form_submit' ) : 'Send Message' ); ?></button>
                  <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="btn btn-outline-dark-2" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp me-2" aria-hidden="true"></i><?php echo esc_html( get_field( 'q_whatsapp' ) ? get_field( 'q_whatsapp' ) : 'Chat on WhatsApp' ); ?>
                  </a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ MAP ============ -->
    <section class="section bg-light-2" aria-labelledby="mapHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'map_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'map_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'map_caption' ) ); ?></p>
      </div>
        <div class="map-frame reveal" style="min-height:440px">
          <iframe src="<?php echo esc_url( y_site( 'map_url', 'https://www.google.com/maps?q=Kathmandu,Nepal&output=embed' ) ); ?>" title="Google Map showing the Yadukul office location in Kathmandu" loading="lazy" style="min-height:440px" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!-- ============ QUICK CONTACT CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-4 reveal">
            <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="value-card d-block text-center h-100">
              <i class="bi bi-telephone-fill" aria-hidden="true"></i>
              <h3><?php echo esc_html( get_field( 'q_call' ) ? get_field( 'q_call' ) : 'Call Us' ); ?></h3>
              <p class="mb-0"><?php echo esc_html( y_site( 'phone' ) ); ?></p>
            </a>
          </div>
          <div class="col-md-4 reveal" style="--d:.08s">
            <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="value-card d-block text-center h-100" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp" aria-hidden="true"></i>
              <h3><?php y_lbl( 'whatsapp' ); ?></h3>
              <p class="mb-0"><?php echo esc_html( get_field( 'whatsapp_note' ) ); ?></p>
            </a>
          </div>
          <div class="col-md-4 reveal" style="--d:.16s">
            <a href="mailto:<?php echo esc_attr( y_site( 'email' ) ); ?>" class="value-card d-block text-center h-100">
              <i class="bi bi-envelope-fill" aria-hidden="true"></i>
              <h3><?php echo esc_html( get_field( 'q_email' ) ? get_field( 'q_email' ) : 'Email Us' ); ?></h3>
              <p class="mb-0"><?php echo esc_html( y_site( 'email' ) ); ?></p>
            </a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
