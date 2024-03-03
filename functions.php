<?php
  // カテゴリー名の前にテキストを追加しない（タイトル以外でカテゴリー表記がある時）
  function my_archive_title($title){
      if (is_category()) {
          $title = single_cat_title('', false);
      }
      return $title;
  }
  add_filter('get_the_archive_title', 'my_archive_title');
?>
