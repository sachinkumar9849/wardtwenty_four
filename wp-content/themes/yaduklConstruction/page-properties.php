<?php
/**
 * Template Name: Properties
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Browse verified land, houses, apartments and commercial properties for sale and rent in Kathmandu, Lalitpur, Bhaktapur, Pokhara and Chitwan. Filter by purpose, type, location, price and area.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Explore Properties | Land, Houses &amp; Commercial Property in Nepal | Yadukul">
  <meta property="og:description" content="Browse verified land, houses, apartments and commercial properties for sale and rent in Kathmandu, Lalitpur, Bhaktapur, Pokhara and Chitwan. Filter by purpose, type, location, price and area.">
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
            <li class="breadcrumb-item active" aria-current="page">Properties</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row g-4 g-xl-5">

          <!-- ============ FILTER SIDEBAR ============ -->
          <aside class="col-lg-3">
            <form class="filter-card" id="filterForm" novalidate>
              <h2><i class="bi bi-sliders me-2 text-accent" aria-hidden="true"></i>Filter Properties</h2>

              <fieldset class="filter-group">
                <legend class="field-label">Purpose</legend>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="purpose" value="sale" id="f-sale">
                  <label class="form-check-label" for="f-sale">For Sale</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="purpose" value="rent" id="f-rent">
                  <label class="form-check-label" for="f-rent">For Rent</label>
                </div>
              </fieldset>

              <fieldset class="filter-group">
                <legend class="field-label">Property Type</legend>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type" value="land" id="f-land">
                  <label class="form-check-label" for="f-land">Land</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type" value="house" id="f-house">
                  <label class="form-check-label" for="f-house">House</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type" value="commercial" id="f-commercial">
                  <label class="form-check-label" for="f-commercial">Commercial</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type" value="apartment" id="f-apartment">
                  <label class="form-check-label" for="f-apartment">Apartment</label>
                </div>
              </fieldset>

              <div class="filter-group">
                <label class="field-label" for="f-location">Location</label>
                <select class="form-select" id="f-location" name="location">
                  <option value="">All Locations</option>
                  <?php foreach ( get_terms( array( 'taxonomy' => 'property_location', 'hide_empty' => false ) ) as $t ) : ?>
                    <option value="<?php echo esc_attr( $t->slug ); ?>"<?php selected( isset($_GET['location']) ? $_GET['location'] : '', $t->slug ); ?>><?php echo esc_html( $t->name ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="filter-group">
                <label class="field-label" for="f-price">Price Range</label>
                <select class="form-select" id="f-price" name="price">
                  <option value="">Any Price</option>
                  <option value="0-5000000">Under 50 Lakhs</option>
                  <option value="5000000-10000000">50 Lakhs &ndash; 1 Crore</option>
                  <option value="10000000-20000000">1 &ndash; 2 Crore</option>
                  <option value="20000000-999999999">2 Crore+</option>
                </select>
              </div>

              <div class="filter-group">
                <label class="field-label" for="f-area">Area</label>
                <select class="form-select" id="f-area" name="area">
                  <option value="">Any Area</option>
                  <option value="0-1000">Under 1,000 sq.ft</option>
                  <option value="1000-2500">1,000 &ndash; 2,500 sq.ft</option>
                  <option value="2500-5000">2,500 &ndash; 5,000 sq.ft</option>
                  <option value="5000-999999">5,000 sq.ft+</option>
                </select>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-accent">Apply Filters</button>
                <button type="button" class="btn btn-outline-dark-2" id="resetFilters">Reset</button>
              </div>

              <p class="mt-4 mb-0 small text-muted-2">
                <i class="bi bi-info-circle me-1" aria-hidden="true"></i>
                Rental listings show a monthly price.
              </p>
            </form>
          </aside>

          <!-- ============ RESULTS ============ -->
          <div class="col-lg-9">
            <div class="results-bar">
              <p><strong id="resultCount"><?php echo (int) wp_count_posts( "property" )->publish; ?></strong> properties found</p>
              <div class="d-flex align-items-center gap-2">
                <label class="field-label mb-0" for="sortBy">Sort</label>
                <select class="form-select form-select-sm" id="sortBy" style="width:auto" aria-label="Sort properties">
                  <option>Newest First</option>
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                </select>
              </div>
            </div>

            <div class="row g-4" id="propertyGrid">
        <?php
        set_query_var( 'y_col_class', 'col-xl-4 col-md-6' );
        $args = array( 'post_type' => 'property', 'posts_per_page' => -1 );
        // Respect ?type= / ?purpose= / ?location= coming from the home page links.
        $tax = array();
        foreach ( array( 'type' => 'property_type', 'purpose' => 'property_purpose', 'location' => 'property_location' ) as $q => $taxo ) {
            if ( ! empty( $_GET[ $q ] ) ) {
                $tax[] = array( 'taxonomy' => $taxo, 'field' => 'slug', 'terms' => sanitize_title( wp_unslash( $_GET[ $q ] ) ) );
            }
        }
        if ( $tax ) { $args['tax_query'] = $tax; }
        $plist = new WP_Query( $args );
        while ( $plist->have_posts() ) : $plist->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        set_query_var( 'y_col_class', '' );
        ?>
            </div>

            <div class="no-results" id="noResults" hidden>
              <i class="bi bi-search" aria-hidden="true"></i>
              <h2 class="section-title h4 mt-3">No properties match your filters</h2>
              <p class="mb-4">Try widening the price range or clearing a filter to see more listings.</p>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent">Request a Property Search</a>
            </div>

            <nav class="mt-5" aria-label="Property pages">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
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
