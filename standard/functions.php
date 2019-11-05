<?php
function theme_setup() {
	// タイトルタグを管理画面より設定
	add_theme_support( 'title-tag' );

	// ロゴを管理画面より設定
	$args = array(
		'height'      => 0,
		'width'       => 0,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' )
	);
	add_theme_support( 'custom-logo', $args );

	// メニューを管理画面に追加
	$args = array(
		'primary' => 'global-navigation'
	);
	register_nav_menus( $args );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_widgets_init() {
	$args = array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'サイドバーとして表示するもの',
		'before_widget' => '<div class="sidemenu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="heading">',
		'after_title'   => '</h2>'
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'theme_widgets_init' );

function theme_scripts() {
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'theme-reset' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );