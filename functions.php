<?php
// WPのテーマ機能を利用するためのadd_theme_supportを使う
  function theme_setup(){
    // RSSフィードを有効化する（データ収集はWPが自動でやってくれる）
    // 件数は設定→表示設定から変更できる
    add_theme_support('automatic-feed-links');
    // 記事のタイトルをtitleタグに自動挿入する
    add_theme_support('title-tag');
  }
  // テーマがロードされた後に起動されるのがafter_setup_theme
  add_action('after_setup_theme', 'theme_setup');
?>
