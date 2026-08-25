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
	$pid      = get_the_ID();
	$gallery  = y_property_gallery( $pid );
	$main_img = $gallery ? $gallery[0] : '';
	$purpose  = y_term( $pid, 'property_purpose' );
	$badge    = get_field( 'badge' ) ? get_field( 'badge' ) : ( $purpose ? 'For ' . $purpose : '' );
	$amen     = get_field( 'amenities' );
	$phone_r  = y_site( 'phone_raw' );
	$wa       = y_site( 'whatsapp' );
?>
    <section class="page-hero" style="padding-bottom:3.5rem">
      <div class="page-hero-media">
        <?php if ( $main_img ) : ?>
        <img src="<?php echo esc_url( $main_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" width="1800" height="1000">
        <?php endif; ?>
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>">Properties</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
          </ol>
        </nav>
        <h1><?php the_title(); ?></h1>
        <?php $addr = get_field( 'full_address' ) ? get_field( 'full_address' ) : get_field( 'location_text' ); ?>
        <?php if ( $addr ) : ?>
        <p><i class="bi bi-geo-alt me-2 text-accent" aria-hidden="true"></i><?php echo esc_html( $addr ); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <section class="section" style="padding-top:3.5rem">
      <div class="container">
        <div class="row g-4 g-xl-5">

          <div class="col-lg-7 col-xl-8">

            <?php if ( $main_img ) : ?>
            <div class="gallery-main" id="galleryMainWrap" data-bs-toggle="modal" data-bs-target="#galleryModal">
              <img src="<?php echo esc_url( $main_img ); ?>" id="galleryMain" alt="<?php echo esc_attr( get_the_title() ); ?>" width="1200" height="790">
              <span class="gallery-zoom"><i class="bi bi-arrows-fullscreen me-2" aria-hidden="true"></i>Click to enlarge</span>
            </div>
            <?php endif; ?>

            <?php if ( count( $gallery ) > 1 ) : ?>
            <div class="gallery-thumbs" role="tablist" aria-label="Property photo gallery">
              <?php foreach ( $gallery as $i => $g ) : ?>
              <button type="button" class="gallery-thumb<?php echo $i ? '' : ' active'; ?>" role="tab" aria-selected="<?php echo $i ? 'false' : 'true'; ?>" data-full="<?php echo esc_url( $g ); ?>">
                <img src="<?php echo esc_url( $g ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?> photo <?php echo $i + 1; ?>" loading="lazy" width="200" height="150">
              </button>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ( trim( get_the_content() ) ) : ?>
            <div class="mt-5">
              <h2 class="section-title h3">Property Details</h2>
              <div class="divider-gold mb-4"></div>
              <?php the_content(); ?>
            </div>
            <?php endif; ?>

            <?php if ( $amen ) : ?>
              <h3 class="h5 mt-5 mb-3">Features &amp; Amenities</h3>
              <div class="row">
                <?php
                $half = ceil( count( $amen ) / 2 );
                foreach ( array_chunk( $amen, $half ) as $col ) : ?>
                <div class="col-md-6">
                  <?php foreach ( $col as $a ) : ?>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $a['text'] ); ?></div>
                  <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <?php if ( y_site( 'map_url' ) ) : ?>
            <div class="mt-5">
              <h2 class="section-title h3">Location</h2>
              <div class="divider-gold mb-4"></div>
              <div class="map-embed">
                <iframe src="<?php echo esc_url( y_site( 'map_url' ) ); ?>" width="100%" height="380" style="border:0" allowfullscreen loading="lazy" title="Property location"></iframe>
              </div>
            </div>
            <?php endif; ?>

          </div>

          <div class="col-lg-5 col-xl-4">
            <div class="detail-panel">
              <?php if ( $badge ) : ?><span class="badge-status position-static d-inline-block mb-3"><?php echo esc_html( $badge ); ?></span><?php endif; ?>
              <h2 class="h4 mb-2"><?php the_title(); ?></h2>
              <?php if ( get_field( 'location_text' ) ) : ?>
              <p class="property-location mb-3"><i class="bi bi-geo-alt" aria-hidden="true"></i><?php echo esc_html( get_field( 'location_text' ) ); ?></p>
              <?php endif; ?>

              <p class="detail-price mb-1"><?php echo esc_html( get_field( 'price_full' ) ? get_field( 'price_full' ) : get_field( 'price_display' ) ); ?></p>
              <?php $pw = get_field( 'price_words' ) ? get_field( 'price_words' ) : get_field( 'price_note' ); ?>
              <?php if ( $pw ) : ?><p class="small mb-0"><?php echo esc_html( $pw ); ?></p><?php endif; ?>

              <ul class="spec-list">
                <?php
                $specs = array(
                    array( 'bi-geo-alt',      'Location',      get_field( 'location_detail' ) ? get_field( 'location_detail' ) : get_field( 'location_text' ) ),
                    array( 'bi-bounding-box', 'Area',          get_field( 'area_full' ) ? get_field( 'area_full' ) : get_field( 'area_display' ) ),
                    array( 'bi-signpost-2',   'Road Access',   get_field( 'road_full' ) ? get_field( 'road_full' ) : get_field( 'road' ) ),
                    array( 'bi-map',          'Property Type', get_field( 'kind' ) ? get_field( 'kind' ) : y_term( $pid, 'property_type' ) ),
                    array( 'bi-tag',          'Purpose',       $badge ),
                    array( 'bi-compass',      'Facing',        get_field( 'facing' ) ),
                );
                foreach ( $specs as $s ) :
                    if ( ! $s[2] ) continue; ?>
                <li><span><i class="bi <?php echo esc_attr( $s[0] ); ?>" aria-hidden="true"></i><?php echo esc_html( $s[1] ); ?></span><strong><?php echo esc_html( $s[2] ); ?></strong></li>
                <?php endforeach; ?>
              </ul>

              <div class="d-grid gap-2 detail-actions">
                <a href="tel:<?php echo esc_attr( $phone_r ); ?>" class="btn btn-accent">
                  <i class="bi bi-telephone-fill me-2" aria-hidden="true"></i>Call Now
                </a>
                <a href="https://wa.me/<?php echo esc_attr( $wa ); ?>" class="btn btn-dark-solid" target="_blank" rel="noopener">
                  <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>WhatsApp
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark-2">
                  <i class="bi bi-envelope me-2" aria-hidden="true"></i>Send Enquiry
                </a>
              </div>

              <p class="small text-muted-2 mt-4 mb-0">
                <?php if ( get_field( 'property_id' ) ) : ?>
                Property ID: <strong><?php echo esc_html( get_field( 'property_id' ) ); ?></strong><br>
                <?php endif; ?>
                Listed by <?php bloginfo( 'name' ); ?>
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php
    // Similar properties: same type, excluding this one.
    $type_slug = y_term_slug( $pid, 'property_type' );
    $similar = new WP_Query( array(
        'post_type'      => 'property',
        'posts_per_page' => 3,
        'post__not_in'   => array( $pid ),
        'tax_query'      => $type_slug ? array( array( 'taxonomy' => 'property_type', 'field' => 'slug', 'terms' => $type_slug ) ) : array(),
    ) );
    if ( ! $similar->have_posts() ) {
        $similar = new WP_Query( array( 'post_type' => 'property', 'posts_per_page' => 3, 'post__not_in' => array( $pid ) ) );
    }
    if ( $similar->have_posts() ) : ?>
    <section class="section bg-light-2" aria-labelledby="similarHeading">
      <div class="container">
        <h2 class="section-title" id="similarHeading">Similar Properties</h2>
        <div class="divider-gold mb-5"></div>
        <div class="row g-4">
          <?php while ( $similar->have_posts() ) : $similar->the_post();
              get_template_part( 'template-parts/property-card' );
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
