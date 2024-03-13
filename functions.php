<?php
  function theme_setup(){
    add_theme_support("post-thumbnails");
  }
  add_action("after_setup_theme", "theme_setup");

  function my_archive($title){
    if(is_tag()){
      $title = single_tag_title("タグ名：", false);
      return $title;
    }
  }
  add_filter("get_the_archive_title", "my_archive");


  function add_custom_menu(){
    // メニューの操作を管理画面からする宣言
    register_nav_menus([
      // メニューの位置
      "header_nav" => "ヘッダーメニュー",
      "footer_nav" => "フッターメニュー"
    ]);
  }
  add_action("init", "add_custom_menu");



  function custom_short_code($attr, $content){
    // デフォルトの属性とテキストを設定
    extract(shortcode_atts([
      "class" => "test",
      "title" => "タイトル"
    ], $attr));

    return "<p class='$class'>" . $title . ":" . $content . "</p>";
  }

  add_shortcode("test_code", "custom_short_code");
?>
