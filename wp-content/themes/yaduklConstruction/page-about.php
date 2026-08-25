<?php
/**
 * Template Name: About
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Learn about Yadukul Real Estate &amp; Construction — a Nepal-based property, engineering and construction company with 10+ years of experience, 500+ properties and 250+ happy clients.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="About Us | Yadukul Real Estate &amp; Construction Pvt. Ltd., Nepal">
  <meta property="og:description" content="Learn about Yadukul Real Estate &amp; Construction — a Nepal-based property, engineering and construction company with 10+ years of experience, 500+ properties and 250+ happy clients.">
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
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <?php /* ============ INTRODUCTION ============ */ ?>
    <section class="section" aria-labelledby="introHeading">
      <div class="container position-relative">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-illustration.jpeg" class="about-illustration d-none d-lg-block" alt="" aria-hidden="true" loading="lazy">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $i_img = get_field( 'intro_image' ) ? get_field( 'intro_image' ) : get_field( 'intro_image_url' ); ?>
              <?php if ( $i_img ) : ?>
              <img src="<?php echo esc_url( $i_img ); ?>" alt="<?php echo esc_attr( get_field( 'intro_title' ) ); ?>" loading="lazy" width="1200" height="1000">
              <?php endif; ?>
              <?php if ( get_field( 'intro_badge_number' ) ) : ?>
              <div class="split-badge"><strong><?php echo esc_html( get_field( 'intro_badge_number' ) ); ?></strong><span><?php echo esc_html( get_field( 'intro_badge_label' ) ); ?></span></div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'intro_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="introHeading"><?php echo esc_html( get_field( 'intro_title' ) ); ?></h2>
            <?php echo wp_kses_post( get_field( 'intro_text' ) ); ?>
          </div>

        </div>

        <?php $i_stats = get_field( 'intro_stats' ); if ( $i_stats ) : ?>
        <div class="stat-grid mt-5 reveal">
          <?php foreach ( $i_stats as $s ) : ?>
          <div class="stat-box"><strong><span data-count="<?php echo esc_attr( $s['number'] ); ?>"><?php echo esc_html( $s['number'] ); ?></span>+</strong><span><?php echo esc_html( $s['label'] ); ?></span></div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <?php /* ============ MISSION & VISION ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="mvHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'mv_eyebrow' ) ); ?></span>
        <h2 class="section-title" id="mvHeading"><?php echo esc_html( get_field( 'mv_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'mv_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $mv = get_field( 'mv_cards' ); if ( $mv ) : foreach ( $mv as $i => $c ) : ?>
          <div class="col-lg-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card h-100">
              <?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p class="mb-0"><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ VALUES ============ -->
    <section class="section" aria-labelledby="valuesHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">What We Stand For</span>
        <h2 class="section-title">Our Values</h2>
        <p class="section-sub">Four commitments that shape how we work with every client.</p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'value_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="value-card">
              <?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
      </div>
    </section>

    <!-- ============ WHY CHOOSE US ============ -->
    <section class="section section-dark" aria-labelledby="whyUsHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow">Our Strength</span>
            <h2 class="section-title" id="whyUsHeading">Why Choose Us?</h2>
            <p class="section-sub">The reasons clients give when they refer us to someone else.</p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent mt-4">Work With Us</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <div class="col-sm-6 reveal"><div class="feature-dark"><i class="bi bi-patch-check" aria-hidden="true"></i><h4>01 &mdash; Trusted Experience</h4><p>Professional property and construction support since 2015.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.08s"><div class="feature-dark"><i class="bi bi-file-earmark-check" aria-hidden="true"></i><h4>02 &mdash; Verified Properties</h4><p>Documents checked and boundaries confirmed before listing.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.16s"><div class="feature-dark"><i class="bi bi-diagram-2" aria-hidden="true"></i><h4>03 &mdash; Complete Solutions</h4><p>Property, engineering and construction handled by one team.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.24s"><div class="feature-dark"><i class="bi bi-headset" aria-hidden="true"></i><h4>04 &mdash; Customer Focused</h4><p>Transparent communication and a named contact throughout.</p></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ TEAM ============ -->
    <section class="section" aria-labelledby="teamHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Our People</span>
        <h2 class="section-title">Meet Our Team</h2>
        <p class="section-sub">Property advisors and licensed engineers who work on your project directly.</p>
      </div>
        <div class="row g-4">
          <?php $team = get_field( 'team_cards' ); if ( $team ) : foreach ( $team as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="team-card"><div class="team-photo"><img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="500" height="550"></div>
              <h3><?php echo esc_html( $c['title'] ); ?></h3><span><?php echo esc_html( $c['role'] ); ?></span></div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight bg-light-2">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2>Let's Talk About Your Property</h2>
              <p>Whether you are buying, selling, renting or building &mdash; start with a free conversation.</p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">Contact Our Team</a>
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
