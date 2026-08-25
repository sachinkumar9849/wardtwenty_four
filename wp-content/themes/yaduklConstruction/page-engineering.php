<?php
/**
 * Template Name: Engineering
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="House map and drawing, architectural and structural design, estimate and BOQ, building permit consultancy and site supervision by licensed engineers in Nepal.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Engineering &amp; Consultancy Services in Nepal | Design, BOQ &amp; Permits | Yadukul">
  <meta property="og:description" content="House map and drawing, architectural and structural design, estimate and BOQ, building permit consultancy and site supervision by licensed engineers in Nepal.">
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
        <img src="https://images.unsplash.com/photo-1503387837-b154d5074bd2?auto=format&fit=crop&w=1200&q=80" alt="Engineer working on architectural drawings at a desk" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Engineering</li>
          </ol>
        </nav>
        <h1>Engineering &amp; Consultancy</h1>
        <p>Drawings, structural design, cost estimates and municipal permits &mdash; prepared by licensed engineers who also build.</p>
        <a href="#services" class="btn btn-accent mt-4">Explore Services</a>
      </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section class="section" id="services" aria-labelledby="engServicesHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Our Expertise</span>
        <h2 class="section-title">Engineering Services</h2>
        <p class="section-sub">Everything you need between owning a plot and starting construction.</p>
      </div>
        <div class="row g-4">

          <div class="col-lg-4 col-md-6 reveal">
            <div class="service-card"><span class="service-no">Service 01</span>
              <div class="service-icon"><i class="bi bi-vector-pen" aria-hidden="true"></i></div>
              <h3>House Map / Drawing</h3>
              <p class="mb-0">Complete working drawings &mdash; plans, elevations, sections and detail drawings ready for the municipality and the site.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 reveal" style="--d:.08s">
            <div class="service-card"><span class="service-no">Service 02</span>
              <div class="service-icon"><i class="bi bi-columns-gap" aria-hidden="true"></i></div>
              <h3>Architectural Design</h3>
              <p class="mb-0">Layouts planned around light, ventilation and your family's daily routine, with 3D views before anything is finalised.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 reveal" style="--d:.16s">
            <div class="service-card"><span class="service-no">Service 03</span>
              <div class="service-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>
              <h3>Structural Design</h3>
              <p class="mb-0">Earthquake-resistant RCC design with full analysis, reinforcement detailing and a signed structural report.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 reveal">
            <div class="service-card"><span class="service-no">Service 04</span>
              <div class="service-icon"><i class="bi bi-calculator" aria-hidden="true"></i></div>
              <h3>Estimate &amp; BOQ</h3>
              <p class="mb-0">Item-wise bill of quantities and rate analysis, so you know the real cost before committing to a contractor.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 reveal" style="--d:.08s">
            <div class="service-card"><span class="service-no">Service 05</span>
              <div class="service-icon"><i class="bi bi-file-earmark-check" aria-hidden="true"></i></div>
              <h3>Building Permit Consultancy</h3>
              <p class="mb-0">Document preparation, submission and follow-up until the municipal building permit is issued.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 reveal" style="--d:.16s">
            <div class="service-card"><span class="service-no">Service 06</span>
              <div class="service-icon"><i class="bi bi-clipboard-check" aria-hidden="true"></i></div>
              <h3>Site Supervision</h3>
              <p class="mb-0">Scheduled site visits checking steel, concrete, levels and workmanship, with a written report each time.</p>
            </div>
          </div>

        </div>

        <div class="row g-4 mt-1">
          <div class="col-lg-6 reveal">
            <div class="service-card"><span class="service-no">Service 07</span>
              <div class="service-icon"><i class="bi bi-people" aria-hidden="true"></i></div>
              <h3>Engineering Consultancy</h3>
              <p class="mb-0">Second-opinion reviews, feasibility studies, soil test coordination, retrofitting advice and valuation reports for banks and buyers.</p>
            </div>
          </div>
          <div class="col-lg-6 reveal" style="--d:.08s">
            <div class="service-card"><span class="service-no">Service 08</span>
              <div class="service-icon"><i class="bi bi-graph-up" aria-hidden="true"></i></div>
              <h3>Land Valuation</h3>
              <p class="mb-0">Independent land and building valuation based on recent transactions, road access, zoning and development potential.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ PROCESS SPLIT ============ -->
    <section class="section bg-light-2" aria-labelledby="engProcessHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 reveal">
            <div class="split-media">
              <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?auto=format&fit=crop&w=1200&q=80" alt="Structural drawings and site plans on a drafting table" loading="lazy" width="1200" height="1000">
              <div class="split-badge"><strong>12</strong><span>Licensed Engineers</span></div>
            </div>
          </div>
          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow">Design Process</span>
            <h2 class="section-title" id="engProcessHeading">Drawings You Can Actually Build From</h2>
            <p class="section-sub">
              Because our engineers also supervise construction, the drawings we hand over are
              detailed enough for the site &mdash; not just enough for the permit file. That single
              difference removes most of the rework and cost escalation owners run into halfway
              through a build.
            </p>
            <ul class="check-list">
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Site visit and bylaw check before the first sketch</li>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Two rounds of layout revisions included</li>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i>3D views before the design is frozen</li>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Structural drawings with full reinforcement detail</li>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i>Soft and printed copies for the municipality and site</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-dark-solid">Discuss Your Drawing</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ DELIVERABLES ============ -->
    <section class="section section-dark" aria-labelledby="deliverHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow">Deliverables</span>
            <h2 class="section-title" id="deliverHeading">What You Receive</h2>
            <p class="section-sub">A complete, buildable document set &mdash; yours to keep, whoever builds it.</p>
            <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="btn btn-accent mt-4">See Construction Services</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <div class="col-sm-6 reveal"><div class="feature-dark"><i class="bi bi-file-earmark-richtext" aria-hidden="true"></i><h4>Architectural Set</h4><p>Plans, elevations, sections, door-window schedule and detail drawings.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.08s"><div class="feature-dark"><i class="bi bi-bezier2" aria-hidden="true"></i><h4>Structural Set</h4><p>Foundation, column, beam and slab drawings with a signed analysis report.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.16s"><div class="feature-dark"><i class="bi bi-table" aria-hidden="true"></i><h4>BOQ &amp; Estimate</h4><p>Item-wise quantities, rate analysis and a total project cost estimate.</p></div></div>
              <div class="col-sm-6 reveal" style="--d:.24s"><div class="feature-dark"><i class="bi bi-stamp" aria-hidden="true"></i><h4>Permit File</h4><p>All municipal submission documents, prepared, submitted and followed up.</p></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2>Need Engineering Support?</h2>
              <p>Share your plot size, location and what you want to build &mdash; we will tell you what is possible and what it costs.</p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">Talk to an Engineer</a>
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
              <a href="tel:+97714567890">+977 1 4567890</a>
            </li>
            <li>
              <i class="bi bi-whatsapp" aria-hidden="true"></i>
              <a href="https://wa.me/9779801234567" target="_blank" rel="noopener">+977 9801234567</a>
            </li>
            <li>
              <i class="bi bi-envelope" aria-hidden="true"></i>
              <a href="mailto:info@yadukul.com.np">info@yadukul.com.np</a>
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
    <a href="https://wa.me/9779801234567" class="float-btn float-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
      <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>
    <a href="tel:+9779801234567" class="float-btn float-call" aria-label="Call us now">
      <i class="bi bi-telephone-fill" aria-hidden="true"></i>
    </a>
    <a href="#" class="float-btn float-top" id="backToTop" aria-label="Back to top">
      <i class="bi bi-arrow-up" aria-hidden="true"></i>
    </a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
