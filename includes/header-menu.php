    <header class="header">
        <input type="checkbox" id="menu_toggle" class="menu_checkbox" hidden>
        <label for="menu_toggle" class="menu_hamburger">
            <span class="bar"></span>
        </label>
        <div class="header_top">
            <div class="header_inner">
                <h1 class="header_title">
                    <a href="./index.html">
                        <?php bloginfo("name");?>
                    </a>
                </h1>
            </div>
            <form action="#" method="get">
            <input type="text" name="s" value="<?php the_search_query();?>" placeholder="検索">
            </form> 
        </div>
        <div class="header_bottom">
            <div class="header_inner">
            <?php
                $locations = get_nav_menu_locations();
                $header_menu = wp_get_nav_menu_object($locations["header_nav"]);
                $header_menu_items = wp_get_nav_menu_items($header_menu->term_id);
            ?>
                <nav class="header_nav">
                    <ul class="header_nav-1">
                        <!-- 現在のパスを取得して引数の相対パスからURLを作成する -->
                        <!-- <li><a href="<?php echo esc_url(home_url('/'));?>">ホーム</a></li>
                        <li><a href="<?php echo esc_url(home_url('/category/js'));?>">ブログ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">プログラミング</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">RPA</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">メンタル</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">キャリア活動</a></li>
                        <li><a href="<?php echo esc_url(home_url('/'));?>">コンテンツ</a></li> -->
                        <?php foreach ($header_menu_items as $item) : ?>
                            <li>
                                <a href="<?php echo esc_attr($item->url); ?>">
                                    <?php echo esc_html($item->title); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
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
