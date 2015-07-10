<?php

/*
 * Define constants
 */
define('ROOT', get_stylesheet_directory_uri());

/*
 * Set up theme support
 */
add_theme_support( 'post-thumbnails' );

/*
 * Load scripts
 */
function load_scripts() {
  wp_register_script('slicknav', ROOT . '/assets/js/vendor/jquery.slicknav.min.js', array(), '1.0.0', true);
  wp_register_script('main', ROOT . '/assets/js/main.js', array('jquery', 'slicknav'), '1.0.0', true);

  wp_enqueue_script('slicknav');
  wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

/*
 * Register menus
 */
function register_menus() {
  register_nav_menus(array(
    'header-nav-menu' => 'Header Navigation Menu'
  ));
}
add_action( 'after_setup_theme', 'register_menus' );

?>
