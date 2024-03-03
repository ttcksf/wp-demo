<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b4cc5d2f25.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header class="header">
        <input type="checkbox" id="menu_toggle" class="menu_checkbox">
        <label for="menu_toggle" class="menu_hamburger">
            <span class="bar"></span>
        </label>
        <div class="header_top">
            <div class="header_inner">
                <h1 class="header_title"><a href="./index.html">＠LIFEハックチャンネル</a></h1>
            </div>
            <form action="#" method="get">
            <input type="text" name="s" value="<?php the_search_query();?>" placeholder="検索">
            </form> 
        </div>
        <div class="header_bottom">
            <div class="header_inner">
                <nav class="header_nav">
                    <ul class="header_nav-1">
                        <li><a href="#">ホーム</a></li>
                        <li><a href="#">ブログ</a></li>
                        <li><a href="#">プログラミング</a></li>
                        <li><a href="#">RPA</a></li>
                        <li><a href="#">メンタル</a></li>
                        <li><a href="#">キャリア活動</a></li>
                        <li><a href="#">コンテンツ</a></li>
                    </ul>
                    <ul class="header_nav-2">
                        <li><a href="#"><span class="sns_icon"><i class="fab fa-instagram"></i></span></a></li>
                        <li><a href="#"><span class="sns_icon"><i class="fab fa-twitter"></i></span></a></li>
                        <li><a href="#"><span class="sns_icon"><i class="fab fa-facebook-f"></i></span></a></li>
                        <li><a href="#"><span class="sns_icon"><i class="fas fa-globe-americas"></i></span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="header_nav-3">
                <a href="#"><span class="sns_icon"><i class="fas fa-user-alt"></i></i></span></a>
            </div>
        </div>
    </header>
