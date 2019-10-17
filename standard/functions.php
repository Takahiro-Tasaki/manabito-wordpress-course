<?php
function theme_setup() {
	// タイトルタグを管理画面より設定
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts() {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'theme-reset' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );