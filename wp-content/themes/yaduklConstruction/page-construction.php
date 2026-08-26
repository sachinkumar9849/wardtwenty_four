<?php
/**
 * Template Name: Construction
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
        <div class="hero-actions mt-4">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent"><?php echo esc_html( y_btn( 'btn_start', 'Start Your Project' ) ); ?></a>
          <a href="#process" class="btn btn-outline-light-2"><?php echo esc_html( y_btn( 'btn_process', 'See Our Process' ) ); ?></a>
        </div>
      </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section class="section" aria-labelledby="consServicesHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'serv_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'serv_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'serv_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'service_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="service-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?>
              <?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
      </div>
    </section>

    <!-- ============ WHY BUILD WITH US ============ -->
    <section class="section bg-light-2" aria-labelledby="whyBuildHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $im = get_field( 'whyb_image_url' ); if ( $im ) : ?><img src="<?php echo esc_url( $im ); ?>" alt="Site engineer supervising work on a residential construction project" loading="lazy" width="1200" height="1000"><?php endif; ?>
              <?php if ( get_field( 'whyb_badge_number' ) ) : ?><div class="split-badge"><strong><?php echo esc_html( get_field( 'whyb_badge_number' ) ); ?></strong><span><?php echo esc_html( get_field( 'whyb_badge_label' ) ); ?></span></div><?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'why_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="whyBuildHeading"><?php echo esc_html( get_field( 'why_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'whyb_sub' ) ); ?></p>
            <?php $cl = get_field( 'whyb_list' ); if ( $cl ) : ?>
            <ul class="check-list">
              <?php foreach ( $cl as $li ) : ?>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $li['text'] ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-dark-solid"><?php echo esc_html( y_btn( 'btn_est', 'Request an Estimate' ) ); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ PROCESS ============ -->
    <section class="section" id="process" aria-labelledby="processHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'proc_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'proc_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'proc_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'proc_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="process-step"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="step-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?><?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?><h3><?php echo esc_html( $c['title'] ); ?></h3><p><?php echo esc_html( $c['text'] ); ?></p></div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ PROJECT GALLERY ============ -->
    <section class="section bg-light-2" aria-labelledby="galleryHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'gal_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'gal_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'gal_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'gal_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) :
              $big = ( $i < 2 ); ?>
          <div class="<?php echo $big ? 'col-lg-6' : 'col-lg-4 col-md-6'; ?> reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="gallery-item"<?php echo $big ? ' style="aspect-ratio:16/10"' : ''; ?>><img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="<?php echo $big ? 900 : 600; ?>" height="<?php echo $big ? 560 : 450; ?>">
              <div class="gallery-caption"><strong><?php echo esc_html( $c['title'] ); ?></strong><span><?php echo esc_html( $c['text'] ); ?></span></div></div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ DARK STATS ============ -->
    <section class="section-tight section-dark">
      <div class="container">
        <div class="row g-4 text-center">
          <?php $sb = get_field( 'stats_band' ); if ( $sb ) : foreach ( $sb as $i => $st ) : ?>
          <div class="col-md-3 col-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .06 ) . 's"' : ''; ?>><strong class="d-block fw-display" style="font-size:2.4rem;color:#fff"><span data-count="<?php echo esc_attr( $st['number'] ); ?>"><?php echo esc_html( $st['number'] ); ?></span><?php echo esc_html( $st['suffix'] ); ?></strong><span class="text-uppercase small" style="letter-spacing:.12em"><?php echo esc_html( $st['label'] ); ?></span></div>
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
