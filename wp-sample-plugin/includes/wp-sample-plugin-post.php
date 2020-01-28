<?php 
/**
 * Sapmle Plugin Post
 *
 * @author 作成者
 * @version 1.0.0
 * @since 1.0.0
 */
class Sample_Plugin_Post {
	
	public function __construct () {
		$this->page_render();
	}
	
	public function page_render () {
		$html  = '<div class="wrap">';
		$html .= '<h2>登録</h2>';
		$html .= '</div>';
		echo $html;
	}
}