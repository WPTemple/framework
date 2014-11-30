<?php

add_action( 'wp_enqueue_scripts', 'wpt_enqueue_styles' );

function wpt_enqueue_styles() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
}
