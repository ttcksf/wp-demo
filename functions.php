<?php
  function theme_setup(){
    add_theme_support('post-thumbnails');
    // 自動切り抜きを初期の3種類以外のオリジナルサイズにする
    // すでに切り抜かれたものには対応できない
    add_image_size("custom-thumbnail-one", 1000, 300, true);
    // テンプレートファイルごとにサイズを分けたい時に便利
    add_image_size("custom-thumbnail-two", 400, 400, true);
  }
  add_action('after_setup_theme', 'theme_setup');
?>
