<?php
// WPのテーマ機能を利用するためのadd_theme_supportを使う
  function theme_setup(){
    // RSSの配信を許可する（データ収集はWPが自動でやってくれるのでサイト側での許可のみが未対応になっているため）
    // 件数は設定→表示設定から変更できる
    add_theme_support('automatic-feed-links');
    // 記事のタイトルをtitleタグに自動挿入する
    add_theme_support('title-tag');
  }
  // テーマがロードされた後に起動されるのがafter_setup_theme
  add_action('after_setup_theme', 'theme_setup');
?>
