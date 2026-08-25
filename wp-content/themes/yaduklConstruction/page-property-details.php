<?php
/**
 * Template Name: Property Details
 */
?>
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
  <main id="main">

    <section class="page-hero" style="padding-bottom:3.5rem">
      <div class="page-hero-media">
        <img src="<?php echo esc_url( y_page_hero_image() ); ?>" alt="<?php echo esc_attr( y_page_hero_heading() ); ?>" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>">Properties</a></li>
            <li class="breadcrumb-item active" aria-current="page">Residential Land at Budhanilkantha</li>
          </ol>
        </nav>
        <h1><?php echo esc_html( y_page_hero_heading() ); ?></h1>
        <?php if ( y_page_hero_sub() ) : ?><p><?php echo esc_html( y_page_hero_sub() ); ?></p><?php endif; ?>
      </div>
    </section>

    <section class="section" style="padding-top:3.5rem">
      <div class="container">
        <div class="row g-4 g-xl-5">

          <!-- ============ GALLERY + CONTENT ============ -->
          <div class="col-lg-7 col-xl-8">

            <div class="gallery-main" id="galleryMainWrap" data-bs-toggle="modal" data-bs-target="#galleryModal">
              <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80" id="galleryMain" alt="Residential land plot with road frontage at Budhanilkantha" width="1200" height="790">
              <span class="gallery-zoom"><i class="bi bi-arrows-fullscreen me-2" aria-hidden="true"></i>Click to enlarge</span>
            </div>

            <div class="gallery-thumbs" role="tablist" aria-label="Property photo gallery">
              <button type="button" class="gallery-thumb active" role="tab" aria-selected="true" data-full="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80" alt="Land plot frontage" loading="lazy" width="200" height="150">
              </button>
              <button type="button" class="gallery-thumb" role="tab" aria-selected="false" data-full="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=1200&q=80">
                <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=1200&q=80" alt="Boundary line of the plot" loading="lazy" width="200" height="150">
              </button>
              <button type="button" class="gallery-thumb" role="tab" aria-selected="false" data-full="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?auto=format&fit=crop&w=1200&q=80">
                <img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?auto=format&fit=crop&w=1200&q=80" alt="Access road leading to the property" loading="lazy" width="200" height="150">
              </button>
              <button type="button" class="gallery-thumb" role="tab" aria-selected="false" data-full="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1200&q=80">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1200&q=80" alt="Surrounding neighbourhood view" loading="lazy" width="200" height="150">
              </button>
              <button type="button" class="gallery-thumb" role="tab" aria-selected="false" data-full="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1800&q=80">
                <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1800&q=80" alt="Hill view from the property" loading="lazy" width="200" height="150">
              </button>
            </div>

            <!-- Property details -->
            <div class="mt-5">
              <h2 class="section-title h3">Property Details</h2>
              <div class="divider-gold mb-4"></div>
              <p>
                A well-shaped 4 aana residential plot in a quiet, established neighbourhood of
                Budhanilkantha&ndash;11, roughly ten minutes from Narayanthan Chowk and twenty minutes
                from Chakrapath. The plot sits on a 13 ft blacktopped road with an existing drainage
                line, and both electricity and municipal water connections are available at the boundary.
              </p>
              <p>
                The land is flat, east facing and ready to build on &mdash; no filling or levelling
                required. It is suitable for a residential bungalow of up to three storeys under the
                current municipal bylaws. The area is fully residential, with schools, a health post
                and daily shops within walking distance, and it has held value well over the last
                five years as the Budhanilkantha corridor has developed.
              </p>
              <p class="mb-0">
                Land ownership certificate (Lalpurja) is clean and in a single name, with no bank
                lien or ongoing dispute. Our team can walk you through the full transfer process at
                the Land Revenue Office.
              </p>

              <h3 class="h5 mt-5 mb-3">Features &amp; Amenities</h3>
              <div class="row">
                <div class="col-md-6">
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>13 ft blacktopped road access</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Electricity connection at boundary</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Municipal water supply line</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Drainage line already laid</div>
                </div>
                <div class="col-md-6">
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Flat, ready-to-build ground</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Clean single-owner Lalpurja</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Schools and shops nearby</div>
                  <div class="amenity-item"><i class="bi bi-check2-circle" aria-hidden="true"></i>Bank loan eligible</div>
                </div>
              </div>
            </div>

            <!-- Location -->
            <div class="mt-5">
              <h2 class="section-title h3">Location</h2>
              <div class="divider-gold mb-4"></div>
              <div class="map-frame">
                <iframe src="https://www.google.com/maps?q=Kathmandu,Nepal&amp;output=embed" title="Map showing the property location in Budhanilkantha, Kathmandu" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
              </div>
              <p class="small mt-3 mb-0">
                <i class="bi bi-info-circle me-1 text-accent" aria-hidden="true"></i>
                Map shows the approximate area. Exact plot boundaries are marked during the site visit.
              </p>
            </div>

            <!-- Enquiry form -->
            <div class="mt-5" id="enquiry">
              <div class="form-card">
                <h2 class="section-title h3">Interested in this Property?</h2>
                <p class="mb-4">Send us your details and a property advisor will call you back within one working day.</p>

                <div class="form-message" id="enquirySuccess">
                  <i class="bi bi-check-circle-fill me-2" aria-hidden="true"></i>
                  Thank you &mdash; your enquiry has been received. We will contact you shortly.
                </div>

                <form class="js-validate row g-3" novalidate>
                  <div class="col-md-6">
                    <label class="field-label" for="e-name">Full Name</label>
                    <input type="text" class="form-control" id="e-name" name="name" placeholder="Your full name" required>
                    <div class="invalid-feedback">Please enter your name.</div>
                  </div>
                  <div class="col-md-6">
                    <label class="field-label" for="e-phone">Phone Number</label>
                    <input type="tel" class="form-control" id="e-phone" name="phone" placeholder="98XXXXXXXX" pattern="[0-9+ ]{7,15}" required>
                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                  </div>
                  <div class="col-12">
                    <label class="field-label" for="e-email">Email Address</label>
                    <input type="email" class="form-control" id="e-email" name="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                  </div>
                  <div class="col-12">
                    <label class="field-label" for="e-message">Message</label>
                    <textarea class="form-control" id="e-message" name="message" rows="4" required
                      placeholder="I would like to schedule a site visit for the Budhanilkantha land."></textarea>
                    <div class="invalid-feedback">Please add a short message.</div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-accent">Submit Enquiry</button>
                  </div>
                </form>
              </div>
            </div>

          </div>

          <!-- ============ STICKY PANEL ============ -->
          <div class="col-lg-5 col-xl-4">
            <div class="detail-panel">
              <span class="badge-status position-static d-inline-block mb-3">For Sale</span>
              <h2 class="h4 mb-2">Residential Land at Budhanilkantha</h2>
              <p class="property-location mb-3"><i class="bi bi-geo-alt" aria-hidden="true"></i>Budhanilkantha, Kathmandu</p>

              <p class="detail-price mb-1">NPR 48,00,000</p>
              <p class="small mb-0">Forty-eight lakhs &middot; negotiable</p>

              <ul class="spec-list">
                <li><span><i class="bi bi-geo-alt" aria-hidden="true"></i>Location</span><strong>Budhanilkantha&ndash;11</strong></li>
                <li><span><i class="bi bi-bounding-box" aria-hidden="true"></i>Area</span><strong>4 Aana (1,369 sq.ft)</strong></li>
                <li><span><i class="bi bi-signpost-2" aria-hidden="true"></i>Road Access</span><strong>13 ft Blacktopped</strong></li>
                <li><span><i class="bi bi-map" aria-hidden="true"></i>Property Type</span><strong>Residential Land</strong></li>
                <li><span><i class="bi bi-tag" aria-hidden="true"></i>Purpose</span><strong>For Sale</strong></li>
                <li><span><i class="bi bi-compass" aria-hidden="true"></i>Facing</span><strong>East</strong></li>
              </ul>

              <div class="d-grid gap-2 detail-actions">
                <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="btn btn-accent">
                  <i class="bi bi-telephone-fill me-2" aria-hidden="true"></i>Call Now
                </a>
                <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="btn btn-dark-solid" target="_blank" rel="noopener">
                  <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>WhatsApp
                </a>
                <a href="#enquiry" class="btn btn-outline-dark-2">
                  <i class="bi bi-envelope me-2" aria-hidden="true"></i>Send Enquiry
                </a>
              </div>

              <p class="small text-muted-2 mt-4 mb-0">
                Property ID: <strong>YK-LND-0142</strong><br>
                Listed by Yadukul Real Estate &amp; Construction
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ SIMILAR PROPERTIES ============ -->
    <section class="section bg-light-2" aria-labelledby="similarHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">You May Also Like</span>
        <h2 class="section-title">Similar Properties</h2>
        <p class="section-sub">Other plots and homes in the same price range.</p>
      </div>
        <div class="row g-4">
        <div class="col-lg-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="bhaktapur" data-price="6200000" data-area="1711">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=1200&q=80" alt="Plotted Land at Suryabinayak" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Plotting Land</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Plotted Land at Suryabinayak</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Suryabinayak, Bhaktapur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>5 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>16 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 62 Lakhs<small>Per plot</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="lalitpur" data-price="8800000" data-area="5476">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?auto=format&fit=crop&w=1200&q=80" alt="Agricultural Land at Godawari" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Agricultural Land</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Agricultural Land at Godawari</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Godawari, Lalitpur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>1 Ropani</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>12 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 88 Lakhs<small>Negotiable</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6 property-col reveal" data-purpose="sale" data-type="house" data-location="bhaktapur" data-price="14500000" data-area="1540">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1576941089067-2de3c901e126?auto=format&fit=crop&w=1200&q=80" alt="Traditional Style House at Balkot" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Ready-Made House</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Traditional Style House at Balkot</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Balkot, Bhaktapur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>4.5 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>14 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 1.45 Crore<small>Negotiable</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        </div>
      </div>
    </section>

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
