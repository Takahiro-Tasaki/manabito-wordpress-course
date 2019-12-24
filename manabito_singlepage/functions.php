<?php 
function theme_setup() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts() {
  wp_enqueue_style( 'theme_normalize', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'theme_style', get_stylesheet_uri(), array( 'theme_normalize' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts');

function delete_unnecessary() {
  remove_action( 'wp_head',             'wp_generator' );
  remove_action( 'wp_head',             'wlwmanifest_link' );
  remove_action( 'wp_head',             'rsd_link' );
  remove_action( 'wp_head',             'wp_shortlink_wp_head' );
  remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles',     'print_emoji_styles' );
  remove_action( 'admin_print_styles',  'print_emoji_styles' );
  add_filter( 'emoji_svg_url', '__return_false' );
}
delete_unnecessary();

function contact_form_complete() {
  echo '<script>';
  echo 'document.addEventListener( "wpcf7mailsent", function( event ) {';
  echo 'var path = "' . home_url( '/' ) .  '";';
  echo 'if ( "40" == event.detail.contactFormId ) {';
  echo 'location = path + "contact_complete/#contact_complete";';
  echo '}';
  echo '});';
  echo '</script>';
}
add_action( 'wp_footer', 'contact_form_complete' );