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
    // 外観に「メニュー」を追加する
    register_nav_menus([
      // メニュー位置の名称（メニューを作成して保存する）
      'header_nav' => 'ヘッダーメニュー',
      'footer_nav' => 'フッターメニュー',
    ]);
  }
  add_action("init", "add_custom_menu");
  
?>
