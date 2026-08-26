<?php
/**
 * One property card. Markup matches the original static design exactly;
 * the values now come from the Property post type.
 */
$pid      = get_the_ID();
$col_cls  = get_query_var( 'y_col_class' );
if ( ! $col_cls ) { $col_cls = 'col-lg-4 col-md-6'; }
$img      = y_property_image( $pid );
$kind     = get_field( 'kind', $pid );
$loc      = get_field( 'location_text', $pid );
$price    = get_field( 'price_display', $pid );
$note     = get_field( 'price_note', $pid );
$area     = get_field( 'area_display', $pid );
$road     = get_field( 'road', $pid );
$badge    = get_field( 'badge', $pid );
$purpose  = y_term( $pid, 'property_purpose' );

if ( ! $badge ) {
	$badge = $purpose ? 'For ' . $purpose : '';
}
?>
<div class="<?php echo esc_attr( $col_cls ); ?> property-col reveal"
     data-purpose="<?php echo esc_attr( y_term_slug( $pid, 'property_purpose' ) ); ?>"
     data-type="<?php echo esc_attr( y_term_slug( $pid, 'property_type' ) ); ?>"
     data-location="<?php echo esc_attr( y_term_slug( $pid, 'property_location' ) ); ?>"
     data-price="<?php echo esc_attr( get_field( 'price_numeric', $pid ) ); ?>"
     data-area="<?php echo esc_attr( get_field( 'area_numeric', $pid ) ); ?>">
  <article class="property-card">
    <div class="property-media">
      <?php if ( $img ) : ?>
        <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" width="600" height="450">
      <?php endif; ?>
      <?php if ( $badge ) : ?>
        <span class="badge-status"><?php echo esc_html( $badge ); ?></span>
      <?php endif; ?>
    </div>
    <div class="property-body">
      <?php if ( $kind ) : ?><span class="property-kind"><?php echo esc_html( $kind ); ?></span><?php endif; ?>
      <h3 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php if ( $loc ) : ?>
        <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i><?php echo esc_html( $loc ); ?></p>
      <?php endif; ?>
      <div class="property-meta">
        <?php if ( $area ) : ?><div><i class="bi bi-bounding-box" aria-hidden="true"></i><?php y_uix( 'sp_area', 'Area' ); ?><strong><?php echo esc_html( $area ); ?></strong></div><?php endif; ?>
        <?php if ( $road ) : ?><div><i class="bi bi-signpost-2" aria-hidden="true"></i><?php y_uix( 'sp_road', 'Road' ); ?><strong><?php echo esc_html( $road ); ?></strong></div><?php endif; ?>
      </div>
      <div class="property-foot">
        <p class="property-price mb-0"><?php echo esc_html( $price ); ?><?php if ( $note ) : ?><small><?php echo esc_html( $note ); ?></small><?php endif; ?></p>
        <a href="<?php the_permalink(); ?>" class="btn-view"><?php y_lbl( 'view_details' ); ?></a>
      </div>
    </div>
  </article>
</div>
