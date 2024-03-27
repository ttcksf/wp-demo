<?php
  function theme_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("automatic-feed-links");
  }
  add_action("after_setup_theme", "theme_setup");

  function custom_post_feed($query){
    if(is_feed()){
      $post_type = $query->get("post_type");
      if(empty($post_type)){
        $query->set("post_type", ["news","post"]);
      }
    }
  }
  add_action("pre_get_posts", "custom_post_feed");


  function my_archive($title){
    if(is_tag()){
      $title = single_tag_title("タグ名：", false);
      return $title;
    }
  }
  add_filter("get_the_archive_title", "my_archive");


  function add_custom_menu(){
    register_nav_menus([
      "header_nav" => "ヘッダーメニュー",
      "footer_nav" => "フッターメニュー"
    ]);
  }
  add_action("init", "add_custom_menu");



  function custom_short_code($attr, $content){
    extract(shortcode_atts([
      "class" => "test",
      "title" => "タイトル"
    ], $attr));

    return "<p class='$class'>" . $title . ":" . $content . "</p>";
  }

  add_shortcode("test_code", "custom_short_code");

  function custom_css(){
    global $post;
    $term = get_post_meta($post->ID, "CSS", true);

    if($term){
      echo "<style>";
      echo esc_html($term);
      echo "</style>";
    }
  }
  add_action("wp_head", "custom_css");

  function custom_desc(){
    // 投稿データを取得
    global $post;
    // 特定の投稿をIDで指定してフィールドのキー名を文字列として取得する
    $term = get_post_meta($post->ID, "Description", true);

    if($term){
      // 変更前、変更後
      printf('<meta name="description content="%s"/>', esc_html($term));
    }
  }
  // headタグを出力するwp_headで実行する
  add_action("wp_head", "custom_desc");
  
?>
