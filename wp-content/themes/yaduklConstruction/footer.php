<?php
/**
 * Site footer and floating quick actions. Used by every template via get_footer().
 */
$socials = array(
	'facebook'  => array( 'bi-facebook',  'Facebook' ),
	'instagram' => array( 'bi-instagram', 'Instagram' ),
	'linkedin'  => array( 'bi-linkedin',  'LinkedIn' ),
	'youtube'   => array( 'bi-youtube',   'YouTube' ),
);
?>
  </main>
  <footer class="site-footer">
    <div class="container">
      <div class="row g-4 g-lg-5">

        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <img src="<?php echo esc_url( y_logo() ); ?>" alt="<?php echo esc_attr( y_brand() . ' logo' ); ?>" width="44" height="44">
            <!-- <span>
              <strong><?php echo esc_html( y_brand() ); ?></strong>
              <small><?php echo esc_html( y_brand_tagline() ); ?></small>
            </span> -->
          </div>
          <p><?php echo esc_html( y_site( 'footer_about' ) ); ?></p>
          <div class="footer-social">
            <?php foreach ( $socials as $key => $s ) : ?>
            <a href="<?php echo esc_url( y_site( $key ) ? y_site( $key ) : '#' ); ?>" aria-label="<?php echo esc_attr( $s[1] ); ?>"<?php echo y_site( $key ) ? ' target="_blank" rel="noopener"' : ''; ?>><i class="bi <?php echo esc_attr( $s[0] ); ?>" aria-hidden="true"></i></a>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <h3><?php echo esc_html( y_site( 'footer_col1_title', 'Quick Links' ) ); ?></h3>
          <ul class="footer-links">
            <?php foreach ( (array) y_get_rows( 'footer_col1' ) as $l ) : ?>
            <li><a href="<?php echo esc_url( y_link( $l['url'] ) ); ?>"<?php if ( ! empty( $l['label_np'] ) ) : ?> data-np="<?php echo esc_attr( $l['label_np'] ); ?>"<?php endif; ?>><?php echo esc_html( $l['label'] ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 col-6">
          <h3><?php echo esc_html( y_site( 'footer_col2_title', 'Services' ) ); ?></h3>
          <ul class="footer-links">
            <?php foreach ( (array) y_get_rows( 'footer_col2' ) as $l ) : ?>
            <li><a href="<?php echo esc_url( y_link( $l['url'] ) ); ?>"><?php echo esc_html( $l['label'] ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h3><?php echo esc_html( y_site( 'footer_col3_title', 'Contact' ) ); ?></h3>
          <ul class="footer-contact">
            <?php if ( y_site( 'address' ) ) : ?>
            <li>
              <i class="bi bi-geo-alt" aria-hidden="true"></i>
              <span><?php echo wp_kses_post( nl2br( esc_html( y_site( 'address' ) ) ) ); ?></span>
            </li>
            <?php endif; ?>
            <li>
              <i class="bi bi-telephone" aria-hidden="true"></i>
              <a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', y_site( 'landline' ) ) ); ?>"><?php echo esc_html( y_site( 'landline' ) ); ?></a>
            </li>
            <li>
              <i class="bi bi-whatsapp" aria-hidden="true"></i>
              <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( y_site( 'phone' ) ); ?></a>
            </li>
            <li>
              <i class="bi bi-envelope" aria-hidden="true"></i>
              <a href="mailto:<?php echo esc_attr( y_site( 'email' ) ); ?>"><?php echo esc_html( y_site( 'email' ) ); ?></a>
            </li>
          </ul>
        </div>

      </div>

      <div class="footer-bottom">
        <div class="row align-items-center g-3">
          <div class="col-lg-6">
            <p class="mb-0"><?php echo esc_html( str_replace( '{year}', date_i18n( 'Y' ), y_site( 'copyright', '© {year} ' . y_brand() . '. All Rights Reserved.' ) ) ); ?></p>
          </div>
          <div class="col-lg-6">
            <div class="footer-legal justify-content-lg-end">
              <?php foreach ( (array) y_get_rows( 'footer_legal' ) as $l ) : ?>
              <a href="<?php echo esc_url( y_link( $l['url'], '#' ) ); ?>"><?php echo esc_html( $l['label'] ); ?></a>
              <?php endforeach; ?>
              <span class="d-flex align-items-center gap-2">
                <button type="button" class="lang-btn active" data-lang="en"><?php y_uix( 'ui_lang_en', 'English' ); ?></button>
                <span aria-hidden="true">|</span>
                <button type="button" class="lang-btn" data-lang="np">नेपाली</button>
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <!-- Floating quick actions -->
  <div class="floating-actions">
    <a href="https://wa.me/<?php echo esc_attr( y_site( 'whatsapp' ) ); ?>" class="float-btn float-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
      <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>
    <a href="tel:<?php echo esc_attr( y_site( 'phone_raw' ) ); ?>" class="float-btn float-call" aria-label="Call us now">
      <i class="bi bi-telephone-fill" aria-hidden="true"></i>
    </a>
    <a href="#" class="float-btn float-top" id="backToTop" aria-label="Back to top">
      <i class="bi bi-arrow-up" aria-hidden="true"></i>
    </a>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
