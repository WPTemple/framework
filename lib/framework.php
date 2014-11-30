<?php
/**
 *
 * Base Framework
 *
 */

include( 'inc/themehookalliance/tha-theme-hooks.php' ); //Include Theme Hook Alliance code

add_action( 'wpt_init', 'wpt_add_theme_support' );
/**
 * Activate Default Theme Features
 *
 * @since 1.0.0
 */
function wpt_add_theme_support() {

}

add_action( 'wpt_init', 'wpt_add_post_type_support' );
/**
 * Add layout support to post types
 *@since 1.0.0
 */
function wpt_add_post_type_support() {
    add_post_type_support( 'post', array() );
    add_post_type_support( 'page', array() );
}

add_action( 'wpt_init', 'wpt_constants' );
/**
 * Define theme constants
 *
 * @since 1.0.0
 *
 */
function wpt_constants() {
    define( 'LIB_DIR', dirname( __FILE__ ) );
    define( 'TEMPLATES_DIR', LIB_DIR. '/templates' );
    define( 'INC_DIR', LIB_DIR . '/inc' );
}
add_action( 'wpt_framework', 'wpt_load_framework' );
/**
 * Start the engine
 *
 * @since 1.0.0
 *
 */
function wpt_load_framework() {
  require_once( LIB_DIR . '/wptemple.php');
  require_once( LIB_DIR . '/templates/header.php');
  require_once( LIB_DIR . '/templates/footer.php');
}
//*Run the init hook
do_action( 'wpt_init');

//* Run load framework hook
do_action( 'wpt_framework' );
