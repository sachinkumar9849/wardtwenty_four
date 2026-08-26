<?php
/**
 * One plotting-project card. Markup matches the original static design;
 * the "View Project" link now points at the project's own page.
 */
$pid   = get_the_ID();
$img   = y_property_image( $pid );
$badge = get_field( 'badge' ) ? get_field( 'badge' ) : 'Plotting Project';
$i     = (int) get_query_var( 'y_card_index' );
?>
<div class="col-lg-4 col-md-6 reveal"<?php echo $i ? ' style="--d:' . ( $i * .08 ) . 's"' : ''; ?>>
  <article class="property-card">
    <div class="property-media">
      <?php if ( $img ) : ?>
      <img src="<?php echo esc_url( $img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="lazy" width="600" height="450">
      <?php endif; ?>
      <span class="badge-status"><?php echo esc_html( $badge ); ?></span>
    </div>
    <div class="property-body">
      <h3 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php if ( get_field( 'location_text' ) ) : ?>
      <p class="property-location"><i class="bi bi-geo-alt" aria-hidden="true"></i><?php echo esc_html( get_field( 'location_text' ) ); ?></p>
      <?php endif; ?>
      <ul class="spec-list mt-0 mb-3">
        <?php
        $specs = array(
            array( 'bi-bounding-box', 'Total Area',  get_field( 'total_area' ) ),
            array( 'bi-grid-3x3',     'Plot Sizes',  get_field( 'plot_sizes' ) ),
            array( 'bi-signpost-2',   'Road Access', get_field( 'road_access' ) ),
        );
        foreach ( $specs as $s ) : if ( ! $s[2] ) continue; ?>
        <li><span><i class="bi <?php echo esc_attr( $s[0] ); ?>" aria-hidden="true"></i><?php echo esc_html( $s[1] ); ?></span><strong><?php echo esc_html( $s[2] ); ?></strong></li>
        <?php endforeach; ?>
      </ul>
      <div class="property-foot">
        <p class="property-price mb-0"><?php echo esc_html( get_field( 'price_display' ) ); ?><?php if ( get_field( 'price_note' ) ) : ?><small><?php echo esc_html( get_field( 'price_note' ) ); ?></small><?php endif; ?></p>
        <a href="<?php the_permalink(); ?>" class="btn-view"><?php y_lbl( 'view_project' ); ?></a>
      </div>
    </div>
  </article>
</div>
