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
	}
	
	/**
	 * タイトルのセッティング
	 *
	 * @param  string $title
	 * @return string
	 */
	public function set_title( $title ) {
		return '★' . $title;
	}
}

new Sample_Plugin();