<?php
  function init_script(){
    // linkタグのid名、ファイルURL
    wp_enqueue_style("fontawesome", "https://use.fontawesome.com/releases/v6.5.0/css/all.css");
  }
  add_action("wp_enqueue_scripts", "init_script");
?>
