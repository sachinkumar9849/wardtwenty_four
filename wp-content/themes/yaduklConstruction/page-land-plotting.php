<?php
/**
 * Template Name: Land Plotting
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
        <a href="#projects" class="btn btn-accent mt-4"><?php echo esc_html( y_btn( 'btn_view', 'View Plotting Projects' ) ); ?></a>
      </div>
    </section>

    <!-- ============ FEATURED PLOTTING PROJECTS ============ -->
    <section class="section" id="projects" aria-labelledby="projectsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'projects_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'projects_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'projects_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
        <?php
        $projects = new WP_Query( array( 'post_type' => 'plot_project', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        $pi = 0;
        while ( $projects->have_posts() ) : $projects->the_post();
            set_query_var( 'y_card_index', $pi++ );
            get_template_part( 'template-parts/project-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ AVAILABLE PLOTS ============ -->
    <section class="section bg-light-2" aria-labelledby="plotsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'plots_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'plots_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'plots_sub' ) ); ?></p>
      </div>
        <div class="table-responsive reveal">
          <table class="table align-middle bg-white" style="border-radius:16px;overflow:hidden">
            <caption class="visually-hidden"><?php y_uix( 'th_caption', 'Available plots with size, facing, road access and price' ); ?></caption>
            <thead>
              <tr class="text-uppercase" style="font-size:.72rem;letter-spacing:.12em">
                <th scope="col"><?php y_uix( 'th_plot_no', 'Plot No.' ); ?></th>
                <th scope="col"><?php y_uix( 'th_area', 'Area' ); ?></th>
                <th scope="col"><?php y_uix( 'th_facing', 'Facing' ); ?></th>
                <th scope="col"><?php y_uix( 'th_road', 'Road' ); ?></th>
                <th scope="col"><?php y_uix( 'th_price', 'Price' ); ?></th>
                <th scope="col"><?php y_uix( 'th_status', 'Status' ); ?></th>
                <th scope="col" class="text-end"><?php y_uix( 'th_action', 'Action' ); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $lp_project = get_posts( array( 'post_type' => 'plot_project', 'numberposts' => 1, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
              $lp_plots   = $lp_project ? get_field( 'plots', $lp_project[0]->ID ) : array();
              if ( $lp_plots ) : foreach ( $lp_plots as $pl ) :
                  $cls = 'text-bg-success';
                  if ( $pl['status'] === 'On Hold' ) { $cls = 'text-bg-warning'; }
                  if ( $pl['status'] === 'Sold' )    { $cls = 'text-bg-secondary'; }
              ?>
              <tr><th scope="row"><?php echo esc_html( $pl['plot_no'] ); ?></th><td><?php echo esc_html( $pl['area'] ); ?></td><td><?php echo esc_html( $pl['facing'] ); ?></td><td><?php echo esc_html( $pl['road'] ); ?></td><td><?php echo esc_html( $pl['price'] ); ?></td><td><span class="badge rounded-pill <?php echo esc_attr( $cls ); ?>"><?php echo esc_html( $pl['status'] ); ?></span></td><td class="text-end"><a href="<?php echo esc_url( get_permalink( $lp_project[0]->ID ) ); ?>" class="btn-view"><?php y_lbl( 'view_details', 'View' ); ?></a></td></tr>
              <?php endforeach; endif; ?>
            </tbody>
          </table>
        </div>
        <p class="small text-center mt-3 mb-0"><i class="bi bi-info-circle me-1 text-accent" aria-hidden="true"></i><?php echo esc_html( get_field( 'plots_note' ) ); ?></p>
      </div>
    </section>
    <!-- ============ PROJECT LOCATION & FEATURES ============ -->
    <section class="section" aria-labelledby="locationHeading">
      <div class="container">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $limg = get_field( 'loc_image_url' ); if ( $limg ) : ?><img src="<?php echo esc_url( $limg ); ?>" alt="Aerial view of the plotting project and surrounding area" loading="lazy" width="1200" height="1000"><?php endif; ?>
              <?php if ( get_field( 'loc_badge_number' ) ) : ?><div class="split-badge">
                <strong><?php echo esc_html( get_field( 'loc_badge_number' ) ); ?></strong>
                <span><?php echo esc_html( get_field( 'loc_badge_label' ) ); ?></span>
              </div><?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'loc_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="locationHeading"><?php echo esc_html( get_field( 'loc_title' ) ); ?></h2>
            <p class=\"section-sub\"><?php echo esc_html( get_field( 'loc_sub' ) ); ?></p>
            <?php $ll = get_field( 'loc_list' ); if ( $ll ) : ?>
            <ul class="check-list">
              <?php foreach ( $ll as $li ) : ?>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $li['text'] ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( get_field( 'loc_btn_url' ) ? get_field( 'loc_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-dark-solid"><?php echo esc_html( get_field( 'loc_btn_text' ) ? get_field( 'loc_btn_text' ) : 'Book a Site Visit' ); ?></a>
          </div>

        </div>
      </div>
    </section>

    <!-- ============ PROJECT FEATURES ============ -->
    <section class="section bg-light-2" aria-labelledby="featuresHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'features_eyebrow' ) ); ?></span>
        <h2 class="section-title" id="featuresHeading"><?php echo esc_html( get_field( 'features_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'features_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'value_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="value-card">
              <?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
      </div>
    </section>

    <!-- ============ INVESTMENT BENEFITS ============ -->
    <section class="section section-dark" aria-labelledby="investHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow"><?php echo esc_html( get_field( 'invest_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="investHeading"><?php echo esc_html( get_field( 'invest_title' ) ); ?></h2>
            <p class=\"section-sub\"><?php echo esc_html( get_field( 'invest_sub' ) ); ?></p>
            <a href="<?php echo esc_url( home_url( get_field( 'invest_btn_url' ) ? get_field( 'invest_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent mt-4"><?php echo esc_html( get_field( 'invest_btn_text' ) ? get_field( 'invest_btn_text' ) : 'Speak to an Advisor' ); ?></a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <?php $ic = get_field( 'invest_cards' ); if ( $ic ) : foreach ( $ic as $i => $c ) : ?>
              <div class="col-sm-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>><div class="feature-dark"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><h4><?php echo esc_html( $c['title'] ); ?></h4><p><?php echo esc_html( $c['text'] ); ?></p></div></div>
              <?php endforeach; endif; ?>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============ MAP ============ -->
    <section class="section" aria-labelledby="mapHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'map_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'map_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'map_sub' ) ); ?></p>
      </div>
        <div class="map-frame reveal" style="min-height:420px">
          <iframe src="<?php echo esc_url( y_site( 'map_url', 'https://www.google.com/maps?q=Kathmandu,Nepal&output=embed' ) ); ?>" title="Map showing Yadukul plotting project locations in Kathmandu" loading="lazy" style="min-height:420px" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight">
      <div class="container">
        <div class="cta-band reveal">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <h2><?php echo esc_html( get_field( 'cta_title' ) ); ?></h2>
              <p><?php echo esc_html( get_field( 'cta_text' ) ); ?></p>
            </div>
            <div class="col-lg-4">
              <div class="d-flex flex-wrap gap-3 justify-content-lg-end cta-actions">
                <a href="<?php echo esc_url( home_url( get_field( 'cta_btn_url' ) ? get_field( 'cta_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( get_field( 'cta_btn_text' ) ? get_field( 'cta_btn_text' ) : 'Contact Our Team' ); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
