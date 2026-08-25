<?php
/**
 * Template Name: Land Plotting
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Planned residential and commercial land plotting projects in Kathmandu, Bhaktapur, Chitwan and Pokhara with proper road access, drainage and clear ownership documents.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Land Plotting Projects in Nepal | Residential &amp; Commercial Plots | Yadukul">
  <meta property="og:description" content="Planned residential and commercial land plotting projects in Kathmandu, Bhaktapur, Chitwan and Pokhara with proper road access, drainage and clear ownership documents.">
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
            <li class="breadcrumb-item active" aria-current="page">Land Plotting</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
        <a href="#projects" class="btn btn-accent mt-4">View Plotting Projects</a>
      </div>
    </section>

    <!-- ============ FEATURED PLOTTING PROJECTS ============ -->
    <section class="section" id="projects" aria-labelledby="projectsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'projects_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'projects_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'projects_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
        <?php
        $projects = new WP_Query( array( 'post_type' => 'plot_project', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        $pi = 0;
        while ( $projects->have_posts() ) : $projects->the_post();
            set_query_var( 'y_card_index', $pi++ );
            get_template_part( 'template-parts/project-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ AVAILABLE PLOTS ============ -->
    <section class="section bg-light-2" aria-labelledby="plotsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'plots_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'plots_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'plots_sub' ) ); ?></p>
      </div>
        <div class="table-responsive reveal">
          <table class="table align-middle bg-white" style="border-radius:16px;overflow:hidden">
            <caption class="visually-hidden">Available plots with size, facing, road access and price</caption>
            <thead>
              <tr class="text-uppercase" style="font-size:.72rem;letter-spacing:.12em">
                <th scope="col">Plot No.</th>
                <th scope="col">Area</th>
                <th scope="col">Facing</th>
                <th scope="col">Road</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col" class="text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $lp_project = get_posts( array( 'post_type' => 'plot_project', 'numberposts' => 1, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
              $lp_plots   = $lp_project ? get_field( 'plots', $lp_project[0]->ID ) : array();
              if ( $lp_plots ) : foreach ( $lp_plots as $pl ) :
                  $cls = 'text-bg-success';
                  if ( $pl['status'] === 'On Hold' ) { $cls = 'text-bg-warning'; }
                  if ( $pl['status'] === 'Sold' )    { $cls = 'text-bg-secondary'; }
              ?>
              <tr><th scope="row"><?php echo esc_html( $pl['plot_no'] ); ?></th><td><?php echo esc_html( $pl['area'] ); ?></td><td><?php echo esc_html( $pl['facing'] ); ?></td><td><?php echo esc_html( $pl['road'] ); ?></td><td><?php echo esc_html( $pl['price'] ); ?></td><td><span class="badge rounded-pill <?php echo esc_attr( $cls ); ?>"><?php echo esc_html( $pl['status'] ); ?></span></td><td class="text-end"><a href="<?php echo esc_url( get_permalink( $lp_project[0]->ID ) ); ?>" class="btn-view">View</a></td></tr>
              <?php endforeach; endif; ?>
            </tbody>
          </table>
        </div>
        <p class="small text-center mt-3 mb-0"><i class="bi bi-info-circle me-1 text-accent" aria-hidden="true"></i><?php echo esc_html( get_field( 'plots_note' ) ); ?></p>
      </div>
    </section>
    <!-- ============ PROJECT LOCATION & FEATURES ============ -->
    <section class="section" aria-labelledby="locationHeading">
      <div class="container">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $limg = get_field( 'loc_image_url' ); if ( $limg ) : ?><img src="<?php echo esc_url( $limg ); ?>" alt="Aerial view of the plotting project and surrounding area" loading="lazy" width="1200" height="1000"><?php endif; ?>
              <?php if ( get_field( 'loc_badge_number' ) ) : ?><div class="split-badge">
                <strong><?php echo esc_html( get_field( 'loc_badge_number' ) ); ?></strong>
                <span><?php echo esc_html( get_field( 'loc_badge_label' ) ); ?></span>
              </div><?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'loc_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="locationHeading"><?php echo esc_html( get_field( 'loc_title' ) ); ?></h2>
            <p class=\"section-sub\"><?php echo esc_html( get_field( 'loc_sub' ) ); ?></p>
            <?php $ll = get_field( 'loc_list' ); if ( $ll ) : ?>
            <ul class="check-list">
              <?php foreach ( $ll as $li ) : ?>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $li['text'] ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( get_field( 'loc_btn_url' ) ? get_field( 'loc_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-dark-solid"><?php echo esc_html( get_field( 'loc_btn_text' ) ? get_field( 'loc_btn_text' ) : 'Book a Site Visit' ); ?></a>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ PROJECT FEATURES ============ -->
    <section class="section bg-light-2" aria-labelledby="featuresHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'features_eyebrow' ) ); ?></span>
        <h2 class="section-title" id="featuresHeading"><?php echo esc_html( get_field( 'features_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'features_sub' ) ); ?></p>
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

    <!-- ============ INVESTMENT BENEFITS ============ -->
    <section class="section section-dark" aria-labelledby="investHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow"><?php echo esc_html( get_field( 'invest_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="investHeading"><?php echo esc_html( get_field( 'invest_title' ) ); ?></h2>
            <p class=\"section-sub\"><?php echo esc_html( get_field( 'invest_sub' ) ); ?></p>
            <a href="<?php echo esc_url( home_url( get_field( 'invest_btn_url' ) ? get_field( 'invest_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent mt-4"><?php echo esc_html( get_field( 'invest_btn_text' ) ? get_field( 'invest_btn_text' ) : 'Speak to an Advisor' ); ?></a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <?php $ic = get_field( 'invest_cards' ); if ( $ic ) : foreach ( $ic as $i => $c ) : ?>
              <div class="col-sm-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>><div class="feature-dark"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><h4><?php echo esc_html( $c['title'] ); ?></h4><p><?php echo esc_html( $c['text'] ); ?></p></div></div>
              <?php endforeach; endif; ?>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ MAP ============ -->
    <section class="section" aria-labelledby="mapHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Find Us On The Map</span>
        <h2 class="section-title">Project Location Map</h2>
        <p class="section-sub">Yadukul Green Valley, Budhanilkantha&ndash;11, Kathmandu.</p>
      </div>
        <div class="map-frame reveal" style="min-height:420px">
          <iframe src="https://www.google.com/maps?q=Kathmandu,Nepal&amp;output=embed" title="Map showing Yadukul plotting project locations in Kathmandu" loading="lazy" style="min-height:420px" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2><?php echo esc_html( get_field( 'cta_title' ) ); ?></h2>
              <p><?php echo esc_html( get_field( 'cta_text' ) ); ?></p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( get_field( 'cta_btn_url' ) ? get_field( 'cta_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( get_field( 'cta_btn_text' ) ? get_field( 'cta_btn_text' ) : 'Contact Our Team' ); ?></a>
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
