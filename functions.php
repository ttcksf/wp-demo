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
?>
