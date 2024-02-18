<?php
  function theme_setup(){
    add_theme_support("post-thumbnails");
    // サイズの名前、横幅、縦幅、トリミング有無
    add_image_size("custom-thumbnail-one", 1000, 300, true);
    add_image_size("custom-thumbnail-two", 500, 500, true);
  }
  add_action("after_setup_theme", "theme_setup");

?>
