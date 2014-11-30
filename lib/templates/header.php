<?php

add_action( 'wpt_header', 'wpt_do_header' );

function wpt_do_header() {
  ?>
  <h1><a href="<?php echo esc_url( home_url( '/') ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  <p class="description"><?php bloginfo( 'description' ); ?></p>
  <?php

  do_action( 'wpt_header_right' );
}
