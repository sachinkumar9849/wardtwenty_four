<?php
/**
 * Template Name: Buildings
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ready-made houses, commercial buildings, apartments and ongoing construction projects for sale in Kathmandu, Lalitpur, Bhaktapur and Pokhara.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Buildings for Sale in Nepal | Houses, Commercial Buildings &amp; Apartments | Yadukul">
  <meta property="og:description" content="Ready-made houses, commercial buildings, apartments and ongoing construction projects for sale in Kathmandu, Lalitpur, Bhaktapur and Pokhara.">
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
            <li class="breadcrumb-item active" aria-current="page">Buildings</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <!-- ============ CATEGORIES ============ -->
    <section class="section" aria-labelledby="catHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Browse</span>
        <h2 class="section-title">Building Categories</h2>
        <p class="section-sub">Four ways to own built property with Yadukul.</p>
      </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 reveal">
            <a class="category-tile" href="#ready-made">
              <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?auto=format&fit=crop&w=1200&q=80" alt="Ready-made house with parking" loading="lazy" width="600" height="470">
              <div class="category-body"><h3>Ready-Made Houses</h3><span>24 listings</span><span class="category-explore">Explore <i class="bi bi-arrow-right" aria-hidden="true"></i></span></div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.06s">
            <a class="category-tile" href="#commercial">
              <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80" alt="Commercial building on a main road" loading="lazy" width="600" height="470">
              <div class="category-body"><h3>Commercial Buildings</h3><span>16 listings</span><span class="category-explore">Explore <i class="bi bi-arrow-right" aria-hidden="true"></i></span></div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.12s">
            <a class="category-tile" href="#apartments">
              <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80" alt="Apartment tower with balconies" loading="lazy" width="600" height="470">
              <div class="category-body"><h3>Apartments</h3><span>19 listings</span><span class="category-explore">Explore <i class="bi bi-arrow-right" aria-hidden="true"></i></span></div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 reveal" style="--d:.18s">
            <a class="category-tile" href="#projects">
              <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80" alt="Building under construction" loading="lazy" width="600" height="470">
              <div class="category-body"><h3>Construction Projects</h3><span>7 ongoing</span><span class="category-explore">Explore <i class="bi bi-arrow-right" aria-hidden="true"></i></span></div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ READY-MADE HOUSES ============ -->
    <section class="section bg-light-2" id="ready-made" aria-labelledby="readyHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow">Move-In Ready</span>
            <h2 class="section-title" id="readyHeading">Ready-Made Houses</h2>
            <p class="section-sub">Completed homes with finished interiors, parking and verified legal documents.</p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=house" class="btn-link-accent">See All Houses <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_house = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array(
                'taxonomy' => 'property_type', 'field' => 'slug',
                'terms'    => 'house',
            ) ),
        ) );
        while ( $q_house->have_posts() ) : $q_house->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ COMMERCIAL BUILDINGS ============ -->
    <section class="section" id="commercial" aria-labelledby="commHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow">Income Property</span>
            <h2 class="section-title" id="commHeading">Commercial Buildings</h2>
            <p class="section-sub">Main-road buildings with existing tenants or ready-to-lease floors.</p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=commercial" class="btn-link-accent">See All Commercial <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_commercial = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_type', 'field' => 'slug', 'terms' => 'commercial' ) ),
        ) );
        while ( $q_commercial->have_posts() ) : $q_commercial->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ APARTMENTS ============ -->
    <section class="section bg-light-2" id="apartments" aria-labelledby="aptHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow">Serviced Living</span>
            <h2 class="section-title" id="aptHeading">Apartments</h2>
            <p class="section-sub">Lift, backup power, parking and 24-hour security as standard.</p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=apartment" class="btn-link-accent">See All Apartments <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_apartment = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_type', 'field' => 'slug', 'terms' => 'apartment' ) ),
        ) );
        while ( $q_apartment->have_posts() ) : $q_apartment->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ CONSTRUCTION PROJECTS ============ -->
    <section class="section" id="projects" aria-labelledby="projHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Under Construction</span>
        <h2 class="section-title">Own Construction Projects</h2>
        <p class="section-sub">Buy early and still choose your finishes, layout and fittings.</p>
      </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 reveal">
            <div class="gallery-item"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=80" alt="Residential block under construction at Tokha" loading="lazy" width="600" height="450">
              <div class="gallery-caption"><strong>Tokha Residency &mdash; Phase I</strong><span>6 units &middot; handover Q3 2026</span></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.08s">
            <div class="gallery-item"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1200&q=80" alt="Commercial structure under construction in Lalitpur" loading="lazy" width="600" height="450">
              <div class="gallery-caption"><strong>Imadol Commercial Block</strong><span>4 floors &middot; handover Q1 2027</span></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 reveal" style="--d:.16s">
            <div class="gallery-item"><img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=1200&q=80" alt="Twin house project under construction in Bhaktapur" loading="lazy" width="600" height="450">
              <div class="gallery-caption"><strong>Balkot Twin Houses</strong><span>2 units &middot; handover Q4 2026</span></div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5 reveal">
          <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="btn btn-dark-solid">See Our Construction Services</a>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2>Looking for Something Specific?</h2>
              <p>Tell us your budget, location and size &mdash; we will shortlist buildings that actually match.</p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">Request a Shortlist</a>
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
