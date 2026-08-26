<?php
/**
 * Template Name: Buildings
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

    <!-- ============ CATEGORIES ============ -->
    <section class="section" aria-labelledby="catHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'cat_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'cat_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'cat_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $tiles = get_field( 'cat_tiles' ); if ( $tiles ) : foreach ( $tiles as $i => $t ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .06 ) . 's"' : ''; ?>>
            <a class="category-tile" href="<?php echo esc_url( strpos( $t['url'], '#' ) === 0 || strpos( $t['url'], 'http' ) === 0 ? $t['url'] : home_url( $t['url'] ) ); ?>">
              <img src="<?php echo esc_url( $t['image_url'] ); ?>" alt="<?php echo esc_attr( $t['title'] ); ?>" loading="lazy" width="600" height="470">
              <div class="category-body"><h3><?php echo esc_html( $t['title'] ); ?></h3><span><?php echo esc_html( $t['meta'] ); ?></span><span class="category-explore"><?php y_lbl( 'explore' ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></span></div>
            </a>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ READY-MADE HOUSES ============ -->
    <section class="section bg-light-2" id="ready-made" aria-labelledby="readyHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow"><?php echo esc_html( get_field( 'ready_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="readyHeading"><?php echo esc_html( get_field( 'ready_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'ready_sub' ) ); ?></p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=house" class="btn-link-accent"><?php echo esc_html( y_btn( 'btn_houses', 'See All Houses' ) ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_house = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array(
                'taxonomy' => 'property_type', 'field' => 'slug',
                'terms'    => 'house',
            ) ),
        ) );
        while ( $q_house->have_posts() ) : $q_house->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ COMMERCIAL BUILDINGS ============ -->
    <section class="section" id="commercial" aria-labelledby="commHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow"><?php echo esc_html( get_field( 'comm_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="commHeading"><?php echo esc_html( get_field( 'comm_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'comm_sub' ) ); ?></p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=commercial" class="btn-link-accent"><?php echo esc_html( y_btn( 'btn_comm', 'See All Commercial' ) ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_commercial = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_type', 'field' => 'slug', 'terms' => 'commercial' ) ),
        ) );
        while ( $q_commercial->have_posts() ) : $q_commercial->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ APARTMENTS ============ -->
    <section class="section bg-light-2" id="apartments" aria-labelledby="aptHeading">
      <div class="container">
        <div class="row align-items-end section-head reveal">
          <div class="col-lg-8">
            <span class="eyebrow"><?php echo esc_html( get_field( 'apt_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="aptHeading"><?php echo esc_html( get_field( 'apt_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'apt_sub' ) ); ?></p>
          </div>
          <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?type=apartment" class="btn-link-accent"><?php echo esc_html( y_btn( 'btn_apts', 'See All Apartments' ) ); ?> <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row g-4">
        <?php
        $q_apartment = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_type', 'field' => 'slug', 'terms' => 'apartment' ) ),
        ) );
        while ( $q_apartment->have_posts() ) : $q_apartment->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>

    <!-- ============ CONSTRUCTION PROJECTS ============ -->
    <section class="section" id="projects" aria-labelledby="projHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'proj_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'proj_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'proj_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $pcards = get_field( 'proj_cards' ); if ( $pcards ) : foreach ( $pcards as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="gallery-item"><img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="600" height="450">
              <div class="gallery-caption"><strong><?php echo esc_html( $c['title'] ); ?></strong><span><?php echo esc_html( $c['meta'] ); ?></span></div>
            </div>
          </div>
          <?php endforeach; endif; ?>
        </div>

        <div class="text-center mt-5 reveal">
          <a href="<?php echo esc_url( home_url( get_field( 'proj_btn_url' ) ? get_field( 'proj_btn_url' ) : '/construction/' ) ); ?>" class="btn btn-dark-solid"><?php echo esc_html( get_field( 'proj_btn_text' ) ? get_field( 'proj_btn_text' ) : 'See Our Construction Services' ); ?></a>
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
                <a href="<?php echo esc_url( home_url( get_field( 'cta_btn_url' ) ? get_field( 'cta_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( get_field( 'cta_btn_text' ) ? get_field( 'cta_btn_text' ) : 'Request a Shortlist' ); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
