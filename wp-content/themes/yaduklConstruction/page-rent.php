<?php
/**
 * Template Name: Rent
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Houses, apartments, offices, shops, commercial spaces and land available for monthly rent in Kathmandu, Lalitpur, Bhaktapur and Pokhara.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Property for Rent in Nepal | House, Office, Shop &amp; Land Rent | Yadukul">
  <meta property="og:description" content="Houses, apartments, offices, shops, commercial spaces and land available for monthly rent in Kathmandu, Lalitpur, Bhaktapur and Pokhara.">
  <meta property="og:site_name" content="Yadukul Real Estate &amp; Construction">

  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.svg" type="image/svg+xml">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <a href="#main" class="visually-hidden-focusable position-absolute top-0 start-0 m-2 p-2 bg-white">Skip to main content</a>

  <header>
    <nav class="navbar navbar-expand-xl navbar-main fixed-top" id="mainNav" aria-label="Main navigation">
      <div class="container">

        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Yadukul Real Estate and Construction logo" width="44" height="44">
          <span class="brand-text">
            <strong>YADUKUL</strong>
            <small>Real Estate &amp; Construction</small>
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation menu">
          <i class="bi bi-list" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-np="गृहपृष्ठ">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" data-np="सम्पत्ति">Properties</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/land-plotting/' ) ); ?>" data-np="जग्गा प्लटिङ">Land Plotting</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/buildings/' ) ); ?>" data-np="भवन">Buildings</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/rent/' ) ); ?>" data-np="भाडा">Rent</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" data-np="निर्माण">Construction</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/engineering/' ) ); ?>" data-np="इन्जिनियरिङ">Engineering</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>" data-np="हाम्रो बारेमा">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" data-np="सम्पर्क">Contact</a></li>
          </ul>

          <div class="nav-actions">
            <div class="lang-switch" role="group" aria-label="Select language">
              <button type="button" class="lang-btn active" data-lang="en" aria-pressed="true">EN</button>
              <span aria-hidden="true">|</span>
              <button type="button" class="lang-btn" data-lang="np" aria-pressed="false">नेपाली</button>
            </div>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent" data-np="सुरु गर्नुहोस्">Get Started</a>
          </div>
        </div>

      </div>
    </nav>
  </header>
  <main id="main">

    <section class="page-hero">
      <div class="page-hero-media">
        <img src="<?php echo esc_url( y_page_hero_image() ); ?>" alt="<?php echo esc_attr( y_page_hero_heading() ); ?>" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rent</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <!-- ============ RENT CATEGORIES ============ -->
    <section class="section" aria-labelledby="rentCatHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Rental Categories</span>
        <h2 class="section-title">What Would You Like to Rent?</h2>
        <p class="section-sub">Five rental categories, each managed by a dedicated advisor.</p>
      </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 reveal">
            <div class="service-card"><div class="service-icon"><i class="bi bi-house-heart" aria-hidden="true"></i></div><h3>House Rent</h3><p class="mb-0">Family homes, duplexes and bungalows with parking, from 1 BHK flats to full buildings.</p></div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.08s">
            <div class="service-card"><div class="service-icon"><i class="bi bi-map" aria-hidden="true"></i></div><h3>Land Rent</h3><p class="mb-0">Open land for parking yards, nurseries, storage, events and agricultural use.</p></div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.16s">
            <div class="service-card"><div class="service-icon"><i class="bi bi-building" aria-hidden="true"></i></div><h3>Office Rent</h3><p class="mb-0">Furnished and bare-shell office floors with lift, backup power and parking.</p></div>
          </div>
          <div class="col-lg-4 col-md-6 reveal">
            <div class="service-card"><div class="service-icon"><i class="bi bi-shop" aria-hidden="true"></i></div><h3>Shop Rent</h3><p class="mb-0">Ground floor retail units on main roads with strong footfall and display frontage.</p></div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.08s">
            <div class="service-card"><div class="service-icon"><i class="bi bi-boxes" aria-hidden="true"></i></div><h3>Commercial Space</h3><p class="mb-0">Warehouses, showrooms, restaurants and full commercial buildings.</p></div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.16s">
            <div class="service-card"><div class="service-icon"><i class="bi bi-file-earmark-text" aria-hidden="true"></i></div><h3>Rental Agreements</h3><p class="mb-0">We draft the agreement, verify the landlord and handle handover documentation.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ RENTAL LISTINGS ============ -->
    <section class="section bg-light-2" aria-labelledby="rentalsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Available Now</span>
        <h2 class="section-title">Rental Properties</h2>
        <p class="section-sub">Current rental listings with monthly rent shown.</p>
      </div>
        <div class="row g-4">
        <?php
        $rent = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_purpose', 'field' => 'slug', 'terms' => 'rent' ) ),
        ) );
        while ( $rent->have_posts() ) : $rent->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>

        <div class="text-center mt-5 reveal">
          <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?purpose=rent" class="btn btn-dark-solid">Browse All Rentals</a>
        </div>
      </div>
    </section>

    <!-- ============ HOW RENTING WORKS ============ -->
    <section class="section" aria-labelledby="howHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">How It Works</span>
        <h2 class="section-title">Renting With Yadukul</h2>
        <p class="section-sub">Four steps from shortlist to keys in hand.</p>
      </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 reveal">
            <div class="process-step"><span class="step-no">01</span><i class="bi bi-chat-dots" aria-hidden="true"></i><h3>Tell Us Your Need</h3><p>Share your budget, preferred area and move-in date.</p></div>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.08s">
            <div class="process-step"><span class="step-no">02</span><i class="bi bi-list-check" aria-hidden="true"></i><h3>Get a Shortlist</h3><p>We send verified options that match &mdash; no time wasted on unavailable listings.</p></div>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.16s">
            <div class="process-step"><span class="step-no">03</span><i class="bi bi-door-open" aria-hidden="true"></i><h3>Visit &amp; Decide</h3><p>We arrange the visits and negotiate the rent on your behalf.</p></div>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.24s">
            <div class="process-step"><span class="step-no">04</span><i class="bi bi-key" aria-hidden="true"></i><h3>Agreement &amp; Handover</h3><p>We prepare the rental agreement and complete the handover.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2>Have a Property to Rent Out?</h2>
              <p>List it with us free of charge. We screen tenants, handle the paperwork and manage the handover.</p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">List Your Property</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="site-footer">
    <div class="container">
      <div class="row g-4 g-lg-5">

        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="Yadukul Real Estate and Construction logo" width="44" height="44">
            <span>
              <strong>YADUKUL</strong>
              <small>Real Estate &amp; Construction</small>
            </span>
          </div>
          <p>
            A Nepal-based property and construction company delivering land, houses,
            commercial spaces, engineering design and turnkey construction under one roof —
            with transparent advice at every step.
          </p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook" aria-hidden="true"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram" aria-hidden="true"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin" aria-hidden="true"></i></a>
            <a href="#" aria-label="YouTube"><i class="bi bi-youtube" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-np="गृहपृष्ठ">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" data-np="सम्पत्ति">Properties</a></li>
            <li><a href="<?php echo esc_url( home_url( '/land-plotting/' ) ); ?>" data-np="जग्गा प्लटिङ">Land Plotting</a></li>
            <li><a href="<?php echo esc_url( home_url( '/buildings/' ) ); ?>" data-np="भवन">Buildings</a></li>
            <li><a href="<?php echo esc_url( home_url( '/rent/' ) ); ?>" data-np="भाडा">Rent</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <h3>Services</h3>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>">Construction</a></li>
            <li><a href="<?php echo esc_url( home_url( '/engineering/' ) ); ?>">Engineering</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Property Consultancy</a></li>
            <li><a href="<?php echo esc_url( home_url( '/engineering/' ) ); ?>">Land Valuation</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Investment Advice</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h3>Contact</h3>
          <ul class="footer-contact">
            <li>
              <i class="bi bi-geo-alt" aria-hidden="true"></i>
              <span>Chabahil Chowk, Ring Road<br>Kathmandu 44600, Nepal</span>
            </li>
            <li>
              <i class="bi bi-telephone" aria-hidden="true"></i>
              <a href="tel:<?php echo esc_attr( preg_replace( '/\\s+/', '', y_site( 'landline' ) ) ); ?>"><?php echo esc_html( y_site( 'landline' ) ); ?></a>
            </li>
            <li>
              <i class="bi bi-whatsapp" aria-hidden="true"></i>
              <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( y_site( 'phone' ) ); ?></a>
            </li>
            <li>
              <i class="bi bi-envelope" aria-hidden="true"></i>
              <a href="mailto:<?php echo esc_attr( y_site( 'email' ) ); ?>"><?php echo esc_html( y_site( 'email' ) ); ?></a>
            </li>
          </ul>
        </div>

      </div>

      <div class="footer-bottom">
        <div class="row align-items-center g-3">
          <div class="col-lg-6">
            <p class="mb-0">&copy; 2026 Yadukul Real Estate &amp; Construction Pvt. Ltd. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6">
            <div class="footer-legal justify-content-lg-end">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms &amp; Conditions</a>
              <span class="d-flex align-items-center gap-2">
                <button type="button" class="lang-btn active" data-lang="en">English</button>
                <span aria-hidden="true">|</span>
                <button type="button" class="lang-btn" data-lang="np">नेपाली</button>
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <!-- Floating quick actions -->
  <div class="floating-actions">
    <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="float-btn float-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
      <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>
    <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="float-btn float-call" aria-label="Call us now">
      <i class="bi bi-telephone-fill" aria-hidden="true"></i>
    </a>
    <a href="#" class="float-btn float-top" id="backToTop" aria-label="Back to top">
      <i class="bi bi-arrow-up" aria-hidden="true"></i>
    </a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
