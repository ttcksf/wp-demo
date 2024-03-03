<?php
 // タグ名の前にテキストを追加しない（タイトル以外でタグ表記がある時）
  function my_archive_title($title){
    if (is_tag()) {
        $title = single_tag_title('', false);
    }
    return $title;
  }
  add_filter('get_the_archive_title', 'my_archive_title');
?>
