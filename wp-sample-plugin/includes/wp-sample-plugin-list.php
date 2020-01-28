<?php 
/**
 * Sapmle Plugin List
 *
 * @author 作成者
 * @version 1.0.0
 * @since 1.0.0
 */
class Sample_Plugin_List {
	
	public function __construct () {
		$this->page_render();
	}
	
	public function page_render () {
		$html  = '<div class="wrap">';
		$html .= '<h2>リスト</h2>';
		$html .= '</div>';
		echo $html;
	}
}