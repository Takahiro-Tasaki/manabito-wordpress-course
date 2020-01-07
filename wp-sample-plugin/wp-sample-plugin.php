<?php
/*
Plugin Name: wp-sample-plugin
Plugin URI: 
Description: プラグインの説明
Version: 1.0.0
Author: 作者名
Author URI: 
License: GPLv2 or later
*/
class Test {
  public $str;
  
  public function __construct( $a ) {
    $this->str = $a;
  }
  
  public function test_one() {
    echo $this->str . '<br>';
  }
  
  public function test_two() {
    echo $this->str . ' ' . $this->str . '<br>';
  }
}
$test = new Test( 'クラスの引数' );
$test->test_one();
$test->test_two();

class Human {
  public $para = array();

  public function __construct( $a ) {
    $this->para = $a;
  }
  
  public function greet( $name ) {
    echo $name . 'さん、' . $this->para['greet'] . '<br>';
  }
  
  public function height() {
    echo $this->para['height'] . '<br>';
  }
}
$jp_para = array(
  'name'   => '山田太郎',
  'greet'  => 'こんばんは',
  'height' => 170
);
$human_jp = new Human( $jp_para );

$usa_para = array(
  'name'   => 'Mike',
  'greet'  => 'GoodEvening',
  'height' => 190
);
$human_usa = new Human( $usa_para );

$human_jp->greet( $human_usa->para['name'] );
$human_jp->height();
$human_usa->greet( $human_jp->para['name'] );
$human_usa->height();