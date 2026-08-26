<?php
/**
 * Template Name: About
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

    <?php /* ============ INTRODUCTION ============ */ ?>
    <section class="section" aria-labelledby="introHeading">
      <div class="container position-relative">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brand-illustration.jpeg" class="about-illustration d-none d-lg-block" alt="" aria-hidden="true" loading="lazy">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $i_img = get_field( 'intro_image' ) ? get_field( 'intro_image' ) : get_field( 'intro_image_url' ); ?>
              <?php if ( $i_img ) : ?>
              <img src="<?php echo esc_url( $i_img ); ?>" alt="<?php echo esc_attr( get_field( 'intro_title' ) ); ?>" loading="lazy" width="1200" height="1000">
              <?php endif; ?>
              <?php if ( get_field( 'intro_badge_number' ) ) : ?>
              <div class="split-badge"><strong><?php echo esc_html( get_field( 'intro_badge_number' ) ); ?></strong><span><?php echo esc_html( get_field( 'intro_badge_label' ) ); ?></span></div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'intro_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="introHeading"><?php echo esc_html( get_field( 'intro_title' ) ); ?></h2>
            <?php echo wp_kses_post( get_field( 'intro_text' ) ); ?>
          </div>

        </div>

        <?php $i_stats = get_field( 'intro_stats' ); if ( $i_stats ) : ?>
        <div class="stat-grid mt-5 reveal">
          <?php foreach ( $i_stats as $s ) : ?>
          <div class="stat-box"><strong><span data-count="<?php echo esc_attr( $s['number'] ); ?>"><?php echo esc_html( $s['number'] ); ?></span>+</strong><span><?php echo esc_html( $s['label'] ); ?></span></div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <?php /* ============ MISSION & VISION ============ */ ?>
    <section class="section bg-light-2" aria-labelledby="mvHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'mv_eyebrow' ) ); ?></span>
        <h2 class="section-title" id="mvHeading"><?php echo esc_html( get_field( 'mv_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'mv_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $mv = get_field( 'mv_cards' ); if ( $mv ) : foreach ( $mv as $i => $c ) : ?>
          <div class="col-lg-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card h-100">
              <?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p class="mb-0"><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ VALUES ============ -->
    <section class="section" aria-labelledby="valuesHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'val_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'val_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'val_sub' ) ); ?></p>
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

    <!-- ============ WHY CHOOSE US ============ -->
    <section class="section section-dark" aria-labelledby="whyUsHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow"><?php echo esc_html( get_field( 'why_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="whyUsHeading"><?php echo esc_html( get_field( 'why_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'why_sub' ) ); ?></p>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent mt-4"><?php echo esc_html( y_btn( 'btn_work', 'Work With Us' ) ); ?></a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
          <?php $rows = get_field( 'why_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-sm-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>><div class="feature-dark"><?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?><h4><?php echo esc_html( $c['title'] ); ?></h4><p><?php echo esc_html( $c['text'] ); ?></p></div></div>
          <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ TEAM ============ -->
    <section class="section" aria-labelledby="teamHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'team_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'team_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'team_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $team = get_field( 'team_cards' ); if ( $team ) : foreach ( $team as $i => $c ) : ?>
          <div class="col-lg-3 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="team-card"><div class="team-photo"><img src="<?php echo esc_url( $c['image_url'] ); ?>" alt="<?php echo esc_attr( $c['title'] ); ?>" loading="lazy" width="500" height="550"></div>
              <h3><?php echo esc_html( $c['title'] ); ?></h3><span><?php echo esc_html( $c['role'] ); ?></span></div>
          </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section-tight bg-light-2">
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
