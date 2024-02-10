<?php
  function init_script(){
    // linkタグのid名、ファイルURL(GoogleFontsのhrefの部分)
    wp_enqueue_style("googlefonts", "https://fonts.googleapis.com/css2?family=Protest+Revolution");
  }
  add_action("wp_enqueue_scripts", "init_script");
?>
