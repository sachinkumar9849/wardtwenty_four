<?php
/**
 * Template Name: Contact
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Contact Yadukul Real Estate &amp; Construction — office at Chabahil Chowk, Kathmandu. Call +977 1 4567890, WhatsApp +977 9801234567 or send us a message about property, construction or engineering.">
  <meta name="author" content="Yadukul Real Estate &amp; Construction Pvt. Ltd.">
  <meta name="theme-color" content="#1F2937">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Contact Us | Yadukul Real Estate &amp; Construction, Kathmandu Nepal">
  <meta property="og:description" content="Contact Yadukul Real Estate &amp; Construction — office at Chabahil Chowk, Kathmandu. Call +977 1 4567890, WhatsApp +977 9801234567 or send us a message about property, construction or engineering.">
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
        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=80" alt="Yadukul office building in Kathmandu" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1>Get in Touch</h1>
        <p>Tell us what you are looking for &mdash; land, a house, a rental, a drawing or a full construction contract. We reply within one working day.</p>
      </div>
    </section>

    <!-- ============ CONTACT DETAILS + FORM ============ -->
    <section class="section" aria-labelledby="contactHeading">
      <div class="container">
        <div class="row g-5">

          <div class="col-lg-4 reveal">
            <span class="eyebrow">Contact Information</span>
            <h2 class="section-title h3" id="contactHeading">Talk to Our Team</h2>
            <p class="section-sub mb-5">Visit the office, call us, or send a message &mdash; whichever is easiest.</p>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
              <div>
                <h3>Office Address</h3>
                <p>Chabahil Chowk, Ring Road<br>Kathmandu 44600, Nepal</p>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-telephone-fill" aria-hidden="true"></i></span>
              <div>
                <h3>Phone</h3>
                <a href="tel:+97714567890">+977 1 4567890</a>
                <a href="tel:+9779801234567">+977 9801234567</a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-whatsapp" aria-hidden="true"></i></span>
              <div>
                <h3>WhatsApp</h3>
                <a href="https://wa.me/9779801234567" target="_blank" rel="noopener">+977 9801234567</a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-envelope-fill" aria-hidden="true"></i></span>
              <div>
                <h3>Email</h3>
                <a href="mailto:info@yadukul.com.np">info@yadukul.com.np</a>
                <a href="mailto:sales@yadukul.com.np">sales@yadukul.com.np</a>
              </div>
            </div>

            <div class="contact-item">
              <span class="ci-icon"><i class="bi bi-clock-fill" aria-hidden="true"></i></span>
              <div>
                <h3>Office Hours</h3>
                <p>Sunday &ndash; Friday: 9:00 AM &ndash; 6:00 PM<br>Saturday: Closed (site visits by appointment)</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 reveal" style="--d:.1s">
            <div class="form-card">
              <h2 class="section-title h3">Send Us a Message</h2>
              <p class="mb-4">Fill in the form and the right advisor or engineer will get back to you.</p>

              <div class="form-message" id="contactSuccess">
                <i class="bi bi-check-circle-fill me-2" aria-hidden="true"></i>
                Thank you for reaching out &mdash; your message has been received. Our team will contact you within one working day.
              </div>

              <form class="js-validate row g-3" novalidate>
                <div class="col-md-6">
                  <label class="field-label" for="c-name">Full Name</label>
                  <input type="text" class="form-control" id="c-name" name="name" placeholder="Your full name" required>
                  <div class="invalid-feedback">Please enter your name.</div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-phone">Phone Number</label>
                  <input type="tel" class="form-control" id="c-phone" name="phone" placeholder="98XXXXXXXX" pattern="[0-9+ ]{7,15}" required>
                  <div class="invalid-feedback">Please enter a valid phone number.</div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-email">Email Address</label>
                  <input type="email" class="form-control" id="c-email" name="email" placeholder="you@example.com" required>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>
                <div class="col-md-6">
                  <label class="field-label" for="c-service">Service</label>
                  <select class="form-select" id="c-service" name="service" required>
                    <option value="">Select a service</option>
                    <option>Buy Land</option>
                    <option>Buy a House or Apartment</option>
                    <option>Sell My Property</option>
                    <option>Rent a Property</option>
                    <option>Land Plotting Project</option>
                    <option>Construction Services</option>
                    <option>Engineering &amp; Design</option>
                    <option>Property Consultancy / Valuation</option>
                  </select>
                  <div class="invalid-feedback">Please choose a service.</div>
                </div>
                <div class="col-12">
                  <label class="field-label" for="c-message">Message</label>
                  <textarea class="form-control" id="c-message" name="message" rows="5" required
                    placeholder="Tell us about your requirement — location, budget, size or timeline."></textarea>
                  <div class="invalid-feedback">Please write a short message.</div>
                </div>
                <div class="col-12 d-flex flex-wrap gap-3 align-items-center">
                  <button type="submit" class="btn btn-accent">Send Message</button>
                  <a href="https://wa.me/9779801234567" class="btn btn-outline-dark-2" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp me-2" aria-hidden="true"></i>Chat on WhatsApp
                  </a>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ MAP ============ -->
    <section class="section bg-light-2" aria-labelledby="mapHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center">Visit Us</span>
        <h2 class="section-title">Find Our Office</h2>
        <p class="section-sub">Chabahil Chowk, Ring Road, Kathmandu &mdash; parking available on site.</p>
      </div>
        <div class="map-frame reveal" style="min-height:440px">
          <iframe src="https://www.google.com/maps?q=Kathmandu,Nepal&amp;output=embed" title="Google Map showing the Yadukul office location in Kathmandu" loading="lazy" style="min-height:440px" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!-- ============ QUICK CONTACT CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-4 reveal">
            <a href="tel:+9779801234567" class="value-card d-block text-center h-100">
              <i class="bi bi-telephone-fill" aria-hidden="true"></i>
              <h3>Call Us</h3>
              <p class="mb-0">+977 9801234567</p>
            </a>
          </div>
          <div class="col-md-4 reveal" style="--d:.08s">
            <a href="https://wa.me/9779801234567" class="value-card d-block text-center h-100" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp" aria-hidden="true"></i>
              <h3>WhatsApp</h3>
              <p class="mb-0">Quick replies, 9 AM &ndash; 8 PM</p>
            </a>
          </div>
          <div class="col-md-4 reveal" style="--d:.16s">
            <a href="mailto:info@yadukul.com.np" class="value-card d-block text-center h-100">
              <i class="bi bi-envelope-fill" aria-hidden="true"></i>
              <h3>Email Us</h3>
              <p class="mb-0">info@yadukul.com.np</p>
            </a>
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
