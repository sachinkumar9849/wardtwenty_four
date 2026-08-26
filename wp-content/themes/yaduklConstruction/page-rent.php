<?php
/**
 * Template Name: Rent
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

    <!-- ============ RENT CATEGORIES ============ -->
    <section class="section" aria-labelledby="rentCatHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'cat_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'cat_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'cat_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'cat_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="service-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?><?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?><h3><?php echo esc_html( $c['title'] ); ?></h3><p class="mb-0"><?php echo esc_html( $c['text'] ); ?></p></div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ RENTAL LISTINGS ============ -->
    <section class="section bg-light-2" aria-labelledby="rentalsHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'list_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'list_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'list_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
        <?php
        $rent = new WP_Query( array(
            'post_type'      => 'property',
            'posts_per_page' => -1,
            'tax_query'      => array( array( 'taxonomy' => 'property_purpose', 'field' => 'slug', 'terms' => 'rent' ) ),
        ) );
        while ( $rent->have_posts() ) : $rent->the_post();
            get_template_part( 'template-parts/property-card' );
        endwhile;
        wp_reset_postdata();
        ?>
        </div>

        <div class="text-center mt-5 reveal">
          <a href="<?php echo esc_url( home_url( '/properties/' ) ); ?>?purpose=rent" class="btn btn-dark-solid"><?php echo esc_html( y_btn( 'btn_browse', 'Browse All Rentals' ) ); ?></a>
        </div>
      </div>
    </section>

    <!-- ============ HOW RENTING WORKS ============ -->
    <section class="section" aria-labelledby="howHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'how_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'how_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'how_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'how_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="process-step"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="step-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?><?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?><h3><?php echo esc_html( $c['title'] ); ?></h3><p><?php echo esc_html( $c['text'] ); ?></p></div>
          </div>
          <?php endforeach; endif; ?>
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
                <a href="<?php echo esc_url( home_url( get_field( 'cta_btn_url' ) ? get_field( 'cta_btn_url' ) : '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( get_field( 'cta_btn_text' ) ); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
