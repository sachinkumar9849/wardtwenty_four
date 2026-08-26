<?php get_header(); ?>
<?php
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
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php y_lbl( 'home' ); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/land-plotting/' ) ); ?>"><?php y_uix( 'bc_plotting', 'Land Plotting' ); ?></a></li>
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
              <h2 class="section-title h3"><?php y_uix( 'sh_about_project', 'About This Project' ); ?></h2>
              <div class="divider-gold mb-4"></div>
              <?php the_content(); ?>
            </div>
            <?php endif; ?>

            <?php if ( $amen ) : ?>
            <h3 class="h5 mt-5 mb-3"><?php y_uix( 'sh_project_features', 'Project Features' ); ?></h3>
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
              <h2 class="section-title h3"><?php y_uix( 'sh_available_plots', 'Available Plots' ); ?></h2>
              <div class="divider-gold mb-4"></div>
              <div class="table-responsive">
                <table class="table align-middle bg-white" style="border-radius:16px;overflow:hidden">
                  <thead>
                    <tr class="text-uppercase" style="font-size:.72rem;letter-spacing:.12em">
                      <th scope="col"><?php y_uix( 'th_plot_no', 'Plot No.' ); ?></th><th scope="col"><?php y_uix( 'th_area', 'Area' ); ?></th><th scope="col"><?php y_uix( 'th_facing', 'Facing' ); ?></th>
                      <th scope="col"><?php y_uix( 'th_road', 'Road' ); ?></th><th scope="col"><?php y_uix( 'th_price', 'Price' ); ?></th><th scope="col"><?php y_uix( 'th_status', 'Status' ); ?></th>
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
                <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="btn btn-accent"><i class="bi bi-telephone-fill me-2" aria-hidden="true"></i><?php y_lbl( 'call' ); ?></a>
                <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="btn btn-dark-solid" target="_blank" rel="noopener"><i class="bi bi-whatsapp me-2" aria-hidden="true"></i><?php y_lbl( 'whatsapp' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark-2"><i class="bi bi-envelope me-2" aria-hidden="true"></i><?php y_lbl( 'visit' ); ?></a>
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
        <h2 class="section-title"><?php y_uix( 'sh_other_projects', 'Other Plotting Projects' ); ?></h2>
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
<?php get_footer(); ?>
