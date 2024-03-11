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
  
  function custom_short_code($attr, $content){
    // return "<p>テスト</p>";
    // ショートコードのブロックで[test_code]テキスト[/test_code]とする
    // return "<p>" . $content . "</p>";

    // 投稿画面の中でテンプレートを作ることもできる
    // [test_code class="test" title="タイトル"]テキスト[/test_code]
    extract(shortcode_atts([
      "class" => "test",
      "title" => "タイトル"
    ],$attr));
    return "<p class='$class'>" . $title . ":" . $content . "</p>";
  }
  // ショートコードのブロックで「[test_code]」と書く
  add_shortcode("test_code", "custom_short_code");
?>
