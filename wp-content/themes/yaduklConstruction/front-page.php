<?php get_header(); ?>


    <?php /* ============ 1. HERO ============ */ ?>
    <section class="hero">
      <div class="hero-media">
        <img src="<?php echo esc_url( y_image( 'hero_image', 'hero_image_url' ) ); ?>" alt="<?php y_text( 'hero_title' ); ?>" width="1800" height="1200" fetchpriority="high">
      </div>
      <div class="container hero-inner">
        <div class="row">
          <div class="col-lg-9 col-xl-8">
            <span class="eyebrow"><?php y_text( 'hero_eyebrow' ); ?></span>
            <h1 data-np="<?php echo esc_attr( y_get( 'hero_title_np' ) ); ?>"><?php y_text( 'hero_title' ); ?></h1>
            <p class="lead-text"><?php y_text( 'hero_text' ); ?></p>
            <div class="hero-actions">
              <a href="<?php y_url( 'hero_btn1_url', '/properties/' ); ?>" class="btn btn-accent"><?php y_text( 'hero_btn1_text', 'Explore Properties' ); ?></a>
              <a href="<?php y_url( 'hero_btn2_url', '/contact/' ); ?>" class="btn btn-outline-light-2"><?php y_text( 'hero_btn2_text', 'Contact Us' ); ?></a>
            </div>

            <?php $stats = y_rows( 'hero_stats' ); if ( $stats ) : ?>
            <div class="hero-stats">
              <?php foreach ( $stats as $s ) : ?>
              <div class="h-stat">
                <strong><span data-count="<?php echo esc_attr( $s['number'] ); ?>"><?php echo esc_html( $s['number'] ); ?></span>+</strong>
                <span><?php echo esc_html( $s['label'] ); ?></span>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <?php /* ============ 2. PROPERTY SEARCH ============ */ ?>
    <section class="search-wrap" aria-labelledby="searchHeading">
      <div class="container">
        <div class="search-card">
          <h2 id="searchHeading"><?php y_text( 'search_title', 'Find Your Property' ); ?></h2>
          <p class="search-sub"><?php y_text( 'search_sub', 'Search from our latest properties' ); ?></p>

          <form id="propertySearch" novalidate>
            <div class="row g-3 align-items-end">

              <div class="col-lg col-md-6">
                <label class="field-label" for="s-purpose"><?php y_text( 'sb_purpose', 'Purpose' ); ?></label>
                <select class="form-select" id="s-purpose" name="purpose">
                  <option value=""><?php y_text( 'sb_purpose_any', 'Buy or Rent' ); ?></option>
                  <?php foreach ( get_terms( array( 'taxonomy' => 'property_purpose', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                    <option value="<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="col-lg col-md-6">
                <label class="field-label" for="s-type"><?php y_text( 'sb_type', 'Property Type' ); ?></label>
                <select class="form-select" id="s-type" name="type">
                  <option value=""><?php y_text( 'sb_type_any', 'All Types' ); ?></option>
                  <?php foreach ( get_terms( array( 'taxonomy' => 'property_type', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                    <option value="<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="col-lg col-md-6">
                <label class="field-label" for="s-location"><?php y_text( 'sb_location', 'Location' ); ?></label>
                <select class="form-select" id="s-location" name="location">
                  <option value=""><?php y_text( 'sb_location_any', 'All Locations' ); ?></option>
                  <?php foreach ( get_terms( array( 'taxonomy' => 'property_location', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                    <option value="<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="col-lg col-md-6">
                <label class="field-label" for="s-price"><?php y_text( 'sb_budget', 'Budget' ); ?></label>
                <select class="form-select" id="s-price" name="price">
                  <option value=""><?php y_text( 'sb_budget_any', 'Any Budget' ); ?></option>
                  <?php foreach ( y_ranges( 'price_ranges' ) as $r ) : ?>
                  <option value="<?php echo esc_attr( $r['value'] ); ?>"><?php echo esc_html( $r['label'] ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="col-lg-auto col-12">
                <button type="submit" class="btn btn-accent w-100">
                  <i class="bi bi-search me-2" aria-hidden="true"></i><?php y_text( 'sb_button', 'Search Property' ); ?>
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </section>

    <?php /* ============ 3. FEATURED PROPERTIES ============ */ ?>
    <section class="section" aria-labelledby="featuredHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow"><?php y_text( 'feat_eyebrow' ); ?></span>
            <h2 class="section-title" id="featuredHeading"><?php y_text( 'feat_title', 'Featured Properties' ); ?></h2>
            <p class="section-sub"><?php y_text( 'feat_sub' ); ?></p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="btn-link-accent"><?php y_text( 'feat_link_text', 'View All Properties' ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="row g-4">
        <?php
        $featured = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => (int) y_get( 'feat_count', 6 ),
            'meta_query'     => array( array( 'key' => 'featured', 'value' => '1' ) ),
        ) );
        while ( $featured->have_posts() ) : $featured->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <?php /* ============ 4. SERVICES ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="servicesHeading">
      <div class="container">
        <div class="section-head section-head-center text-center reveal">
          <span class="eyebrow eyebrow-center"><?php y_text( 'serv_eyebrow' ); ?></span>
          <h2 class="section-title" id="servicesHeading"><?php y_text( 'serv_title', 'Our Services' ); ?></h2>
          <p class="section-sub"><?php y_text( 'serv_sub' ); ?></p>
        </div>
        <div class="row g-4">
          <?php foreach ( y_rows( 'services' ) as $i => $s ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card">
              <?php if ( ! empty( $s['number_label'] ) ) : ?><span class="service-no"><?php echo esc_html( $s['number_label'] ); ?></span><?php endif; ?>
              <div class="service-icon"><i class="bi <?php echo esc_attr( $s['icon'] ); ?>" aria-hidden="true"></i></div>
              <h3><?php echo esc_html( $s['title'] ); ?></h3>
              <?php if ( ! empty( $s['items'] ) ) : ?>
              <ul class="service-list">
                <?php foreach ( $s['items'] as $it ) : ?><li><?php echo esc_html( $it['text'] ); ?></li><?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php /* ============ 5. LAND PLOTTING ============ */ ?>
    <section class="section" aria-labelledby="plottingHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 reveal">
            <div class="split-media">
              <img src="<?php echo esc_url( y_image( 'plot_image', 'plot_image_url' ) ); ?>" alt="<?php y_text( 'plot_title' ); ?>" loading="lazy" width="1200" height="900">
              <?php if ( y_get( 'plot_badge_number' ) ) : ?>
              <div class="split-badge">
                <strong><?php y_text( 'plot_badge_number' ); ?></strong>
                <span><?php y_text( 'plot_badge_label' ); ?></span>
              </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php y_text( 'plot_eyebrow' ); ?></span>
            <h2 class="section-title" id="plottingHeading"><?php y_text( 'plot_title' ); ?></h2>
            <p class="section-sub"><?php y_text( 'plot_sub' ); ?></p>
            <?php $pl = y_rows( 'plot_list' ); if ( $pl ) : ?>
            <ul class="check-list">
              <?php foreach ( $pl as $li ) : ?>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $li['text'] ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php y_url( 'plot_btn_url', '/land-plotting/' ); ?>" class="btn btn-dark-solid"><?php y_text( 'plot_btn_text', 'View Plotting Projects' ); ?></a>
          </div>
        </div>
      </div>
    </section>

    <?php /* ============ 6. BUILDINGS ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="buildingsHeading">
      <div class="container">
        <div class="section-head section-head-center text-center reveal">
          <span class="eyebrow eyebrow-center"><?php y_text( 'build_eyebrow' ); ?></span>
          <h2 class="section-title" id="buildingsHeading"><?php y_text( 'build_title' ); ?></h2>
          <p class="section-sub"><?php y_text( 'build_sub' ); ?></p>
        </div>
        <div class="row g-4">
          <?php foreach ( y_rows( 'build_cards' ) as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <article class="property-card">
              <div class="property-media"><img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="600" height="450"></div>
              <div class="property-body">
                <h3 class="property-title"><?php echo esc_html( $c['title'] ); ?></h3>
                <p class="mb-4"><?php echo esc_html( $c['text'] ); ?></p>
                <a href="<?php echo esc_url( strpos( $c['url'], 'http' ) === 0 ? $c['url'] : home_url( $c['url'] ) ); ?>" class="btn btn-outline-dark-2 mt-auto align-self-start"><?php y_text( 'cat_link_text', 'View Properties' ); ?></a>
              </div>
            </article>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php /* ============ 7. CONSTRUCTION & ENGINEERING ============ */ ?>
    <section class="section section-dark" aria-labelledby="constructionHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow"><?php y_text( 'const_eyebrow' ); ?></span>
            <h2 class="section-title" id="constructionHeading"><?php y_text( 'const_title' ); ?></h2>
            <p class="section-sub"><?php y_text( 'const_sub' ); ?></p>
            <a href="<?php y_url( 'const_btn_url', '/contact/' ); ?>" class="btn btn-accent mt-4"><?php y_text( 'const_btn_text', 'Talk to Our Experts' ); ?></a>
          </div>

          <div class="col-lg-7">
            <div class="row g-4">
              <?php foreach ( y_rows( 'const_cards' ) as $i => $c ) : ?>
              <div class="col-sm-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
                <div class="feature-dark">
                  <i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i>
                  <h4><?php echo esc_html( $c['title'] ); ?></h4>
                  <p><?php echo esc_html( $c['text'] ); ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* ============ 8. WHY CHOOSE US ============ */ ?>
    <section class="section" aria-labelledby="whyHeading">
      <div class="container">
        <div class="section-head section-head-center text-center reveal">
          <span class="eyebrow eyebrow-center"><?php y_text( 'why_eyebrow' ); ?></span>
          <h2 class="section-title" id="whyHeading"><?php y_text( 'why_title', 'Why Choose Us?' ); ?></h2>
          <p class="section-sub"><?php y_text( 'why_sub' ); ?></p>
        </div>
        <div class="row g-4 g-lg-5">
          <?php foreach ( y_rows( 'why_cards' ) as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="why-item">
              <span class="why-num"><?php echo esc_html( $c['meta'] ? $c['meta'] : sprintf( '%02d', $i + 1 ) ); ?></span>
              <div>
                <h3><?php echo esc_html( $c['title'] ); ?></h3>
                <p><?php echo esc_html( $c['text'] ); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php /* ============ 9. PROPERTY CATEGORIES ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="categoriesHeading">
      <div class="container">
        <div class="section-head section-head-center text-center reveal">
          <span class="eyebrow eyebrow-center"><?php y_text( 'cat_eyebrow' ); ?></span>
          <h2 class="section-title" id="categoriesHeading"><?php y_text( 'cat_title', 'Property Categories' ); ?></h2>
          <p class="section-sub"><?php y_text( 'cat_sub' ); ?></p>
        </div>
        <div class="row g-4">
          <?php foreach ( y_rows( 'cat_cards' ) as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .06 ) . 's"' : ''; ?>>
            <a class="category-tile" href="<?php echo esc_url( strpos( $c['url'], 'http' ) === 0 ? $c['url'] : home_url( $c['url'] ) ); ?>">
              <img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="600" height="470">
              <div class="category-body">
                <h3><?php echo esc_html( $c['title'] ); ?></h3>
                <span><?php echo esc_html( $c['meta'] ); ?></span>
                <span class="category-explore"><?php y_lbl( 'explore' ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></span>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <?php /* ============ 10. ABOUT COMPANY ============ */ ?>
    <section class="section" aria-labelledby="aboutHeading">
      <div class="container position-relative">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-illustration.jpeg" class="about-illustration d-none d-lg-block" alt="" aria-hidden="true" loading="lazy">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6 reveal">
            <div class="split-media">
              <img src="<?php echo esc_url( y_image( 'about_image', 'about_image_url' ) ); ?>" alt="<?php y_text( 'about_title' ); ?>" loading="lazy" width="1200" height="1000">
              <?php if ( y_get( 'about_badge_number' ) ) : ?>
              <div class="split-badge">
                <strong><?php y_text( 'about_badge_number' ); ?></strong>
                <span><?php y_text( 'about_badge_label' ); ?></span>
              </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php y_text( 'about_eyebrow' ); ?></span>
            <h2 class="section-title" id="aboutHeading"><?php y_text( 'about_title' ); ?></h2>
            <p class="section-sub"><?php y_text( 'about_sub' ); ?></p>

            <?php $ast = y_rows( 'about_stats' ); if ( $ast ) : ?>
            <div class="stat-grid">
              <?php foreach ( $ast as $s ) : ?>
              <div class="stat-box">
                <strong><span data-count="<?php echo esc_attr( $s['number'] ); ?>"><?php echo esc_html( $s['number'] ); ?></span>+</strong>
                <span><?php echo esc_html( $s['label'] ); ?></span>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <a href="<?php y_url( 'about_btn_url', '/about/' ); ?>" class="btn btn-dark-solid"><?php y_text( 'about_btn_text', 'Learn More About Us' ); ?></a>
          </div>

        </div>
      </div>
    </section>

    <?php /* ============ 11. CTA ============ */ ?>
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2><?php y_text( 'cta_title' ); ?></h2>
              <p><?php y_text( 'cta_text' ); ?></p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php y_url( 'cta_btn_url', '/contact/' ); ?>" class="btn btn-accent"><?php y_text( 'cta_btn_text', 'Get a Free Consultation' ); ?></a>
                <?php if ( y_get( 'cta_btn2_text' ) ) : ?>
                <a href="<?php y_url( 'cta_btn2_url', '/contact/' ); ?>" class="btn btn-outline-light-2"><?php y_text( 'cta_btn2_text' ); ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* ============ 12. TESTIMONIALS ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="testimonialsHeading">
      <div class="container">
        <div class="section-head section-head-center text-center reveal">
          <span class="eyebrow eyebrow-center"><?php y_text( 'testi_eyebrow' ); ?></span>
          <h2 class="section-title" id="testimonialsHeading"><?php y_text( 'testi_title', 'What Our Clients Say' ); ?></h2>
          <p class="section-sub"><?php y_text( 'testi_sub' ); ?></p>
        </div>
        <div class="row g-4">
          <?php
          $tq = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 3 ) );
          $i = 0;
          while ( $tq->have_posts() ) : $tq->the_post();
              $rating = (int) get_field( 'rating' ); if ( ! $rating ) { $rating = 5; }
              $name   = get_the_title();
              $words  = preg_split( '/\\s+/', trim( $name ) );
              $initials = strtoupper( mb_substr( $words[0], 0, 1 ) . ( isset( $words[1] ) ? mb_substr( $words[1], 0, 1 ) : '' ) );
          ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="testimonial-card">
              <div class="testimonial-stars" aria-label="Rated <?php echo esc_attr( $rating ); ?> out of 5">
                <?php for ( $s = 0; $s < $rating; $s++ ) : ?><i class="bi bi-star-fill"></i><?php endfor; ?>
              </div>
              <blockquote><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></blockquote>
              <div class="testimonial-person">
                <span class="testimonial-avatar" aria-hidden="true"><?php echo esc_html( $initials ); ?></span>
                <div>
                  <strong><?php echo esc_html( $name ); ?></strong>
                  <span><?php echo esc_html( get_field( 'role' ) ); ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </section>

    <?php /* ============ 13. LATEST PROPERTIES ============ */ ?>
    <section class="section" aria-labelledby="latestHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow"><?php y_text( 'latest_eyebrow' ); ?></span>
            <h2 class="section-title" id="latestHeading"><?php y_text( 'latest_title', 'Latest Properties' ); ?></h2>
            <p class="section-sub"><?php y_text( 'latest_sub' ); ?></p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>" class="btn-link-accent"><?php y_text( 'latest_link_text', 'Browse All' ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="row g-4">
        <?php
        $latest = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => (int) y_get( 'latest_count', 3 ),
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );
        while ( $latest->have_posts() ) : $latest->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
