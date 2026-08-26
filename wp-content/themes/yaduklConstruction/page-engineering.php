<?php
/**
 * Template Name: Engineering
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
        <a href="#services" class="btn btn-accent mt-4"><?php echo esc_html( y_btn( 'btn_explore', 'Explore Services' ) ); ?></a>
      </div>
    </section>

    <!-- ============ SERVICES ============ -->
    <section class="section" id="services" aria-labelledby="engServicesHeading">
      <div class="container">
      <div class="section-head section-head-center text-center reveal">
        <span class="eyebrow eyebrow-center"><?php echo esc_html( get_field( 'serv_eyebrow' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( get_field( 'serv_title' ) ); ?></h2>
        <p class="section-sub"><?php echo esc_html( get_field( 'serv_sub' ) ); ?></p>
      </div>
        <div class="row g-4">
          <?php $rows = get_field( 'service_cards' ); if ( $rows ) : foreach ( array_slice( $rows, 0, 6 ) as $i => $c ) : ?>
          <div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="service-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?>
              <?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; endif; ?>
        <?php $extra = array_slice( $rows, 6 ); if ( $extra ) : ?>
        <div class="row g-4 mt-1">
          <?php foreach ( $extra as $i => $c ) : ?>
          <div class="col-lg-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
            <div class="service-card"><?php if ( ! empty( $c['number_label'] ) ) : ?><span class="service-no"><?php echo esc_html( $c['number_label'] ); ?></span><?php endif; ?>
              <?php if ( ! empty( $c['icon'] ) ) : ?><div class="service-icon"><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i></div><?php endif; ?>
              <h3><?php echo esc_html( $c['title'] ); ?></h3>
              <p class="mb-0"><?php echo esc_html( $c['text'] ); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>
      </div>
    </section>
    <!-- ============ PROCESS SPLIT ============ -->
    <section class="section bg-light-2" aria-labelledby="engProcessHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 reveal">
            <div class="split-media">
              <?php $im = get_field( 'proc2_image_url' ); if ( $im ) : ?><img src="<?php echo esc_url( $im ); ?>" alt="Structural drawings and site plans on a drafting table" loading="lazy" width="1200" height="1000"><?php endif; ?>
              <?php if ( get_field( 'proc2_badge_number' ) ) : ?><div class="split-badge"><strong><?php echo esc_html( get_field( 'proc2_badge_number' ) ); ?></strong><span><?php echo esc_html( get_field( 'proc2_badge_label' ) ); ?></span></div><?php endif; ?>
            </div>
          </div>
          <div class="col-lg-6 reveal" style="--d:.1s">
            <span class="eyebrow"><?php echo esc_html( get_field( 'proc_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="engProcessHeading"><?php echo esc_html( get_field( 'proc_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'proc2_sub' ) ); ?></p>
            <?php $cl = get_field( 'proc2_list' ); if ( $cl ) : ?>
            <ul class="check-list">
              <?php foreach ( $cl as $li ) : ?>
              <li><i class="bi bi-check2-circle" aria-hidden="true"></i><?php echo esc_html( $li['text'] ); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-dark-solid"><?php echo esc_html( y_btn( 'btn_discuss', 'Discuss Your Drawing' ) ); ?></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ DELIVERABLES ============ -->
    <section class="section section-dark" aria-labelledby="deliverHeading">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 reveal">
            <span class="eyebrow"><?php echo esc_html( get_field( 'deliv_eyebrow' ) ); ?></span>
            <h2 class="section-title" id="deliverHeading"><?php echo esc_html( get_field( 'deliv_title' ) ); ?></h2>
            <p class="section-sub"><?php echo esc_html( get_field( 'deliv_sub' ) ); ?></p>
            <a href="<?php echo esc_url( home_url( '/construction/' ) ); ?>" class="btn btn-accent mt-4"><?php echo esc_html( y_btn( 'btn_constr', 'See Construction Services' ) ); ?></a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
          <?php $rows = get_field( 'deliv_cards' ); if ( $rows ) : foreach ( $rows as $i => $c ) : ?>
          <div class="col-sm-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>><div class="feature-dark"><?php if ( ! empty( $c['icon'] ) ) : ?><i class="bi <?php echo esc_attr( $c['icon'] ); ?>" aria-hidden="true"></i><?php endif; ?><h4><?php echo esc_html( $c['title'] ); ?></h4><p><?php echo esc_html( $c['text'] ); ?></p></div></div>
          <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section">
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
