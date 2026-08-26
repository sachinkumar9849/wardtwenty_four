<?php
/**
 * Template Name: Properties
 */
?>
<?php get_header(); ?>


    <section class="page-hero">
      <div class="page-hero-media">
        <img src="<?php echo esc_url( y_page_hero_image() ); ?>" alt="<?php echo esc_attr( y_page_hero_heading() ); ?>" width="1800" height="1000">
      </div>
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php y_lbl( 'home' ); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( get_the_title() ); ?></li>
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
              <h2><i class="bi bi-sliders me-2 text-accent" aria-hidden="true"></i><?php echo esc_html( get_field( 'flt_title' ) ? get_field( 'flt_title' ) : 'Filter Properties' ); ?></h2>

              <fieldset class="filter-group">
                <legend class="field-label"><?php echo esc_html( get_field( 'flt_purpose' ) ? get_field( 'flt_purpose' ) : 'Purpose' ); ?></legend>
                <?php foreach ( get_terms( array( 'taxonomy' => 'property_purpose', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="purpose" value="<?php echo esc_attr( $t->slug ); ?>" id="f-<?php echo esc_attr( $t->slug ); ?>">
                  <label class="form-check-label" for="f-<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( 'For ' . $t->name ); ?></label>
                </div>
                <?php endforeach; ?>
              </fieldset>

              <fieldset class="filter-group">
                <legend class="field-label"><?php echo esc_html( get_field( 'flt_type' ) ? get_field( 'flt_type' ) : 'Property Type' ); ?></legend>
                <?php foreach ( get_terms( array( 'taxonomy' => 'property_type', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="type" value="<?php echo esc_attr( $t->slug ); ?>" id="f-<?php echo esc_attr( $t->slug ); ?>">
                  <label class="form-check-label" for="f-<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></label>
                </div>
                <?php endforeach; ?>
              </fieldset>

              <div class="filter-group">
                <label class="field-label" for="f-location"><?php echo esc_html( get_field( 'flt_location' ) ? get_field( 'flt_location' ) : 'Location' ); ?></label>
                <select class="form-select" id="f-location" name="location">
                  <option value=""><?php echo esc_html( get_field( 'flt_any_location' ) ? get_field( 'flt_any_location' ) : 'All Locations' ); ?></option>
                  <?php foreach ( get_terms( array( 'taxonomy' => 'property_location', 'hide_empty' => false, 'orderby' => 'term_id', 'order' => 'ASC' ) ) as $t ) : ?>
                    <option value="<?php echo esc_attr( $t->slug ); ?>"<?php selected( isset($_GET['location']) ? $_GET['location'] : '', $t->slug ); ?>><?php echo esc_html( $t->name ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="filter-group">
                <label class="field-label" for="f-price"><?php echo esc_html( get_field( 'flt_price' ) ? get_field( 'flt_price' ) : 'Price Range' ); ?></label>
                <select class="form-select" id="f-price" name="price">
                  <option value=""><?php echo esc_html( get_field( 'flt_any_price' ) ? get_field( 'flt_any_price' ) : 'Any Price' ); ?></option>
                  <?php foreach ( y_ranges( 'price_ranges' ) as $r ) : ?>
                  <option value="<?php echo esc_attr( $r['value'] ); ?>"><?php echo esc_html( $r['label'] ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="filter-group">
                <label class="field-label" for="f-area"><?php echo esc_html( get_field( 'flt_area' ) ? get_field( 'flt_area' ) : 'Area' ); ?></label>
                <select class="form-select" id="f-area" name="area">
                  <option value=""><?php echo esc_html( get_field( 'flt_any_area' ) ? get_field( 'flt_any_area' ) : 'Any Area' ); ?></option>
                  <?php foreach ( y_ranges( 'area_ranges' ) as $r ) : ?>
                  <option value="<?php echo esc_attr( $r['value'] ); ?>"><?php echo esc_html( $r['label'] ); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-accent"><?php y_lbl( 'apply' ); ?></button>
                <button type="button" class="btn btn-outline-dark-2" id="resetFilters"><?php y_lbl( 'reset' ); ?></button>
              </div>

              <p class="mt-4 mb-0 small text-muted-2">
                <i class="bi bi-info-circle me-1" aria-hidden="true"></i>
                <?php echo esc_html( get_field( 'flt_note' ) ? get_field( 'flt_note' ) : 'Rental listings show a monthly price.' ); ?>
              </p>
            </form>
          </aside>

          <!-- ============ RESULTS ============ -->
          <div class="col-lg-9">
            <div class="results-bar">
              <p><strong id="resultCount"><?php echo (int) wp_count_posts( "property" )->publish; ?></strong> <?php y_lbl( 'found' ); ?></p>
              <div class="d-flex align-items-center gap-2">
                <label class="field-label mb-0" for="sortBy"><?php echo esc_html( get_field( 'flt_sort' ) ? get_field( 'flt_sort' ) : 'Sort' ); ?></label>
                <select class="form-select form-select-sm" id="sortBy" style="width:auto" aria-label="Sort properties">
                  <?php foreach ( y_ranges( 'sort_options' ) as $r ) : ?>
                  <option><?php echo esc_html( $r['label'] ); ?></option>
                  <?php endforeach; ?>
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
              <h2 class="section-title h4 mt-3"><?php echo esc_html( get_field( 'empty_title' ) ); ?></h2>
              <p class="mb-4"><?php echo esc_html( get_field( 'empty_text' ) ); ?></p>
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( y_btn( 'btn_req', 'Request a Property Search' ) ); ?></a>
            </div>

            <nav class="mt-5" aria-label="Property pages">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><?php y_lbl( 'prev' ); ?></a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><?php y_lbl( 'next' ); ?></a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </section>
<?php get_footer(); ?>
