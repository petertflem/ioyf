<?php 

define('ROOT', get_stylesheet_directory_uri());

function load_scripts() {
  wp_register_script( 'google-map', 'https://maps.googleapis.com/maps/api/js', array(), '1.0.0', true);
  wp_register_script( 'init-map', get_template_directory_uri() . '/assets/js/init-map.js', array('google-map'), '1.0.0', true);
  wp_enqueue_script('google-map');
  wp_enqueue_script('init-map');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

?>