<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="4 aana residential land for sale at Budhanilkantha, Kathmandu with 13 ft road access, east facing, NPR 48,00,000. View photos, location map and enquire directly.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Residential Land at Budhanilkantha, Kathmandu &ndash; 4 Aana | Yadukul">
  <meta property="og:description" content="4 aana residential land for sale at Budhanilkantha, Kathmandu with 13 ft road access, east facing, NPR 48,00,000. View photos, location map and enquire directly.">
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
  <main id="main"><?php
while ( have_posts() ) : the_post();
	$pid   = get_the_ID();
	$img   = y_property_image( $pid );
	$badge = get_field( 'badge' ) ? get_field( 'badge' ) : 'Plotting Project';
	$plots = get_field( 'plots' );
	$amen  = get_field( 'amenities' );
?>
    <section class="page-hero" style="padding-bottom:3.5rem">
      <div class="page-hero-media">
        <?php if ( $img ) : ?><img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" width="1800" height="1000"><?php endif; ?>
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/land-plotting/' ) ); ?>">Land Plotting</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <h1><?php the_title(); ?></h1>
        <?php if ( get_field( 'location_text' ) ) : ?>
        <p><i class="bi bi-geo-alt me-2 text-accent" aria-hidden="true"></i><?php echo esc_html( get_field( 'location_text' ) ); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="section" style="padding-top:3.5rem">
      <div class="container">
        <div class="row g-4 g-xl-5">

          <div class="col-lg-7 col-xl-8">
            <?php if ( $img ) : ?>
            <div class="gallery-main">
              <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" width="1200" height="790">
            </div>
            <?php endif; ?>

            <?php if ( trim( get_the_content() ) ) : ?>
            <div class="mt-5">
              <h2 class="section-title h3">About This Project</h2>
              <div class="divider-gold mb-4"></div>
              <?php the_content(); ?>
            </div>
            <?php endif; ?>

            <?php if ( $amen ) : ?>
            <h3 class="h5 mt-5 mb-3">Project Features</h3>
            <div class="row">
              <?php $half = ceil( count( $amen ) / 2 );
              foreach ( array_chunk( $amen, $half ) as $col ) : ?>
              <div class="col-md-6">
                <?php foreach ( $col as $a ) : ?>
                <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $a['text'] ); ?></div>
                <?php endforeach; ?>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ( $plots ) : ?>
            <div class="mt-5">
              <h2 class="section-title h3">Available Plots</h2>
              <div class="divider-gold mb-4"></div>
              <div class="table-responsive">
                <table class="table align-middle bg-white" style="border-radius:16px;overflow:hidden">
                  <thead>
                    <tr class="text-uppercase" style="font-size:.72rem;letter-spacing:.12em">
                      <th scope="col">Plot No.</th><th scope="col">Area</th><th scope="col">Facing</th>
                      <th scope="col">Road</th><th scope="col">Price</th><th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ( $plots as $pl ) :
                        $cls = 'text-bg-success';
                        if ( $pl['status'] === 'On Hold' ) { $cls = 'text-bg-warning'; }
                        if ( $pl['status'] === 'Sold' )    { $cls = 'text-bg-secondary'; } ?>
                    <tr>
                      <th scope="row"><?php echo esc_html( $pl['plot_no'] ); ?></th>
                      <td><?php echo esc_html( $pl['area'] ); ?></td>
                      <td><?php echo esc_html( $pl['facing'] ); ?></td>
                      <td><?php echo esc_html( $pl['road'] ); ?></td>
                      <td><?php echo esc_html( $pl['price'] ); ?></td>
                      <td><span class="badge rounded-pill <?php echo esc_attr( $cls ); ?>"><?php echo esc_html( $pl['status'] ); ?></span></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <?php endif; ?>
          </div>

          <div class="col-lg-5 col-xl-4">
            <div class="detail-panel">
              <span class="badge-status position-static d-inline-block mb-3"><?php echo esc_html( $badge ); ?></span>
              <h2 class="h4 mb-2"><?php the_title(); ?></h2>
              <?php if ( get_field( 'location_text' ) ) : ?>
              <p class="property-location mb-3"><i class="bi bi-geo-alt" aria-hidden="true"></i><?php echo esc_html( get_field( 'location_text' ) ); ?></p>
              <?php endif; ?>

              <p class="detail-price mb-1"><?php echo esc_html( get_field( 'price_display' ) ); ?></p>
              <?php if ( get_field( 'price_note' ) ) : ?><p class="small mb-0"><?php echo esc_html( get_field( 'price_note' ) ); ?></p><?php endif; ?>

              <ul class="spec-list">
                <?php
                $specs = array(
                    array( 'bi-geo-alt',      'Location',    get_field( 'location_text' ) ),
                    array( 'bi-bounding-box', 'Total Area',  get_field( 'total_area' ) ),
                    array( 'bi-grid-3x3',     'Plot Sizes',  get_field( 'plot_sizes' ) ),
                    array( 'bi-signpost-2',   'Road Access', get_field( 'road_access' ) ),
                );
                foreach ( $specs as $s ) : if ( ! $s[2] ) continue; ?>
                <li><span><i class="bi <?php echo esc_attr( $s[0] ); ?>" aria-hidden="true"></i><?php echo esc_html( $s[1] ); ?></span><strong><?php echo esc_html( $s[2] ); ?></strong></li>
                <?php endforeach; ?>
              </ul>

              <div class="d-grid gap-2 detail-actions">
                <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="btn btn-accent"><i class="bi bi-telephone-fill me-2" aria-hidden="true"></i>Call Now</a>
                <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="btn btn-dark-solid" target="_blank" rel="noopener"><i class="bi bi-whatsapp me-2" aria-hidden="true"></i>WhatsApp</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark-2"><i class="bi bi-envelope me-2" aria-hidden="true"></i>Book a Site Visit</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php
    $others = new WP_Query( array( 'post_type' => 'plot_project', 'posts_per_page' => 3, 'post__not_in' => array( $pid ), 'orderby' => 'menu_order', 'order' => 'ASC' ) );
    if ( $others->have_posts() ) : ?>
    <section class="section bg-light-2">
      <div class="container">
        <h2 class="section-title">Other Plotting Projects</h2>
        <div class="divider-gold mb-5"></div>
        <div class="row g-4">
          <?php while ( $others->have_posts() ) : $others->the_post();
              get_template_part( 'template-parts/project-card' );
          endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
    <?php endif; ?>
<?php endwhile; ?>
  </main>

  <!-- Enlarged photo -->
  <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content border-0" style="border-radius:16px;overflow:hidden">
        <div class="modal-header border-0">
          <h2 class="modal-title h6" id="galleryModalLabel">Residential Land at Budhanilkantha</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <img src="" id="galleryModalImage" alt="Enlarged property photo" class="w-100">
        </div>
      </div>
    </div>
  </div>
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
