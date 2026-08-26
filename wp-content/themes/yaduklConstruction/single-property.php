<?php get_header(); ?>
<?php
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
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php y_lbl( 'home' ); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>"><?php y_uix( 'bc_properties', 'Properties' ); ?></a></li>
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
              <span class="gallery-zoom"><i class="bi bi-arrows-fullscreen me-2" aria-hidden="true"></i><?php y_lbl( 'zoom' ); ?></span>
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
              <h2 class="section-title h3"><?php y_uix( 'sh_property_details', 'Property Details' ); ?></h2>
              <div class="divider-gold mb-4"></div>
              <?php the_content(); ?>
            </div>
            <?php endif; ?>

            <?php if ( $amen ) : ?>
              <h3 class="h5 mt-5 mb-3"><?php y_uix( 'sh_features', 'Features & Amenities' ); ?></h3>
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
              <h2 class="section-title h3"><?php y_uix( 'sh_location', 'Location' ); ?></h2>
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
                  <i class="bi bi-telephone-fill me-2" aria-hidden="true"></i><?php y_lbl( 'call' ); ?>
                </a>
                <a href="https://wa.me/<?php echo esc_attr( $wa ); ?>" class="btn btn-dark-solid" target="_blank" rel="noopener">
                  <i class="bi bi-whatsapp me-2" aria-hidden="true"></i><?php y_lbl( 'whatsapp' ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark-2">
                  <i class="bi bi-envelope me-2" aria-hidden="true"></i><?php y_lbl( 'enquiry' ); ?>
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
        <h2 class="section-title" id="similarHeading"><?php y_uix( 'sh_similar', 'Similar Properties' ); ?></h2>
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
<?php get_footer(); ?>
