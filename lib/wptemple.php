<?php
  function wptemple() {
  get_header();

  if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
  the_content();
  endwhile;
  endif;
  get_footer();
}
