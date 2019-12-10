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