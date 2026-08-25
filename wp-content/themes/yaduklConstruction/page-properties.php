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
        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1800&q=80" alt="Aerial view of residential neighbourhood in the Kathmandu Valley" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Properties</li>
          </ol>
        </nav>
        <h1>Explore Properties</h1>
        <p>Verified land, houses, apartments and commercial properties for sale and rent across Nepal.</p>
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
                  <option value="kathmandu">Kathmandu</option>
                  <option value="lalitpur">Lalitpur</option>
                  <option value="bhaktapur">Bhaktapur</option>
                  <option value="chitwan">Chitwan</option>
                  <option value="pokhara">Pokhara</option>
                  <option value="other">Other</option>
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
              <p><strong id="resultCount">12</strong> properties found</p>
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
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="kathmandu" data-price="4800000" data-area="1369">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1200&q=80" alt="Residential Land at Budhanilkantha" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Residential Land</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Residential Land at Budhanilkantha</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Budhanilkantha, Kathmandu</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>4 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>13 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 48 Lakhs<small>Negotiable</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="house" data-location="lalitpur" data-price="32500000" data-area="2054">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?auto=format&fit=crop&w=1200&q=80" alt="Modern 2.5 Storey House at Bhaisepati" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Ready-Made House</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Modern 2.5 Storey House at Bhaisepati</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Bhaisepati, Lalitpur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>6 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>20 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 3.25 Crore<small>Fixed price</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="commercial" data-location="kathmandu" data-price="120000000" data-area="3080">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1554435493-93422e8220c8?auto=format&fit=crop&w=1200&q=80" alt="Commercial Building on Ring Road" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Commercial Building</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Commercial Building on Ring Road</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Chabahil, Kathmandu</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>9 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>30 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 12 Crore<small>Rental income ready</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="apartment" data-location="kathmandu" data-price="18500000" data-area="1450">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80" alt="3BHK Apartment at Dhapasi Heights" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Apartment</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">3BHK Apartment at Dhapasi Heights</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Dhapasi, Kathmandu</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>1,450 sq.ft</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>Blacktopped</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 1.85 Crore<small>Bank loan available</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="bhaktapur" data-price="6200000" data-area="1711">
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
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="rent" data-type="house" data-location="pokhara" data-price="95000" data-area="3200">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=1200&q=80" alt="Furnished Bungalow at Lakeside" loading="lazy" width="600" height="450">
              <span class="badge-status rent">For Rent</span>
            </div>
            <div class="property-body">
              <span class="property-kind">House for Rent</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Furnished Bungalow at Lakeside</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Lakeside, Pokhara</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>3,200 sq.ft</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>18 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 95,000<small>Per month</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="house" data-location="lalitpur" data-price="26500000" data-area="1711">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80" alt="Contemporary Duplex at Imadol" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Ready-Made House</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Contemporary Duplex at Imadol</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Imadol, Lalitpur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>5 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>16 ft Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 2.65 Crore<small>Negotiable</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="rent" data-type="commercial" data-location="kathmandu" data-price="120000" data-area="820">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1200&q=80" alt="Ground Floor Retail Space, Newroad" loading="lazy" width="600" height="450">
              <span class="badge-status rent">For Rent</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Shop / Retail Space</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Ground Floor Retail Space, Newroad</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Newroad, Kathmandu</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>820 sq.ft</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>Main Road</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 1,20,000<small>Per month</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="chitwan" data-price="19500000" data-area="4107">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1200&q=80" alt="Highway Facing Land at Bharatpur" loading="lazy" width="600" height="450">
              <span class="badge-status">For Sale</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Commercial Land</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">Highway Facing Land at Bharatpur</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Bharatpur, Chitwan</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>12 Aana</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>40 ft Highway</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 1.95 Crore<small>Per plot</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="rent" data-type="apartment" data-location="lalitpur" data-price="65000" data-area="1100">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80" alt="2BHK Serviced Apartment at Jhamsikhel" loading="lazy" width="600" height="450">
              <span class="badge-status rent">For Rent</span>
            </div>
            <div class="property-body">
              <span class="property-kind">Apartment</span>
              <h3 class="property-title"><a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>">2BHK Serviced Apartment at Jhamsikhel</a></h3>
              <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i>Jhamsikhel, Lalitpur</p>
              <div class="property-meta">
                <div><i class="bi bi-bounding-box" aria-hidden="true"></i>Area<strong>1,100 sq.ft</strong></div>
                <div><i class="bi bi-signpost-2" aria-hidden="true"></i>Road<strong>Blacktopped</strong></div>
              </div>
              <div class="property-foot">
                <p class="property-price mb-0">NPR 65,000<small>Per month</small></p>
                <a href="<?php echo esc_url( home_url( '/property-details/' ) ); ?>" class="btn-view">View Details</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="land" data-location="lalitpur" data-price="8800000" data-area="5476">
          <article class="property-card">
            <div class="property-media">
              <img src="https://images.unsplash.com/photo-1499529112087-3cb3b73cec95?auto=format&fit=crop&w=1200&q=80" alt="Agricultural Land at Godawari" loading="lazy" width="600" height="450">
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
        <div class="col-xl-4 col-md-6 property-col reveal" data-purpose="sale" data-type="house" data-location="bhaktapur" data-price="14500000" data-area="1540">
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
