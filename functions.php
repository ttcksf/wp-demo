<?php
// テーマをアイキャッチ画像の登録に対応させる
// WPのテーマ機能を利用するためのadd_theme_supportを使う
  function theme_setup(){
    // 右上の設定から非表示にすることも可能
    add_theme_support('post-thumbnails');
  }
  // テーマがロードされた後に起動されるのがafter_setup_theme
  add_action('after_setup_theme', 'theme_setup');
?>
