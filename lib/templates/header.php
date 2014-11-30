<?php

add_action( 'wpt_header', 'wpt_do_header' );

function wpt_do_header() {
  ?>
  <h1><?php bloginfo( 'name' ); ?></h1>
  <p class="dscription"><?php bloginfo( 'description' ); ?></p>
  <?php

  do_action( 'wpt_header_right' );
}
