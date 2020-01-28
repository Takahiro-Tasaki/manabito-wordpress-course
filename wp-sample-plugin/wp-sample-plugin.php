<?php
/*
Plugin Name: Sample Plugin
Plugin URI: 
Description: プラグインの説明
Version: 1.0.0
Author: 作成者
Author URI: 
License: GPLv2 or later
*/

/**
 * Base Class
 *
 * @author  作成者
 * @version 1.0.0
 * @since   1.0.0
 */
class Sample_Plugin {
	public function __construct() {
		add_action( 'the_title', array( $this, 'set_title' ) );
		
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}
	
	/**
	 * タイトルのセッティング
	 *
	 * @param  string $title
	 * @return string
	 */
	public function set_title( $title ) {
		return '♪( ´▽｀)' . $title;
	}
	
	public function admin_menu () {
		add_menu_page(
			'タイトル',
			'メニュー名',
			'manage_options',
			plugin_basename( __FILE__ ),
			array( $this, 'list_page_render' )
		);
		add_submenu_page(
			__FILE__,
			'リスト',
			'リスト',
			'manage_options',
			plugin_basename( __FILE__ ),
			array( $this, 'list_page_render' )
		);
		add_submenu_page(
			__FILE__,
			'サブメニュータイトル2',
			'サブメニュー名2',
			'manage_options',
			plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-post.php',
			array( $this, 'post_page_render' )
		);
	}
	
	public function list_page_render () {
		require_once( plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-list.php' );
		new Sample_Plugin_List();
	}
	
	public function post_page_render () {
		require_once( plugin_dir_path( __FILE__ ) . 'includes/wp-sample-plugin-post.php' );
		new Sample_Plugin_Post();
	}
}

new Sample_Plugin();