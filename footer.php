<footer class="footer">
        <div class="footer_top">
            <?php
                $locations = get_nav_menu_locations();
                $footer_menu = wp_get_nav_menu_object($locations["footer_nav"]);
                $footer_menu_items = wp_get_nav_menu_items($footer_menu->term_id);
            ?>
            <div class="footer_nav">
                <div class="footer_nav-1">
                    <ul>
                        <!-- <li><a href="#">ホーム</a></li>
                        <li><a href="#">ブログ</a></li>
                        <li><a href="#">プログラミング</a></li>
                        <li><a href="#">RPA</a></li>
                        <li><a href="#">メンタル</a></li>
                        <li><a href="#">キャリア活動</a></li>
                        <li><a href="#">コンテンツ</a></li> -->
                        <?php foreach ($footer_menu_items as $item) : ?>
                            <li>
                                <a href="<?php echo esc_attr($item->url); ?>">
                                    <?php echo esc_html($item->title); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer_nav-2">
                    <ul>
                        <li><span>オンラインサロン</span><a href="#">click</a></li>
                        <li><span>コーチング</span><a href="#">click</a></li>
                        <li><span>お仕事などの依頼</span><a href="#">click</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_signature">
                <div class="signature_prof">
                    <div class="signature_prof_name">
                        <p>Name Surname</p>
                    </div>
                </div>
                <div class="signature_text">
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="slide">
                    <ul>
                        <li>•</li>
                        <li>•</li>
                        <li>•</li>
                        <li>•</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <a href="<?php bloginfo("atom_url");?>">RSS</a>
            <p>
                <?php
                    if(function_exists("the_privacy_policy_link")){
                        the_privacy_policy_link();
                    }
                ?>
            </p>
            <div class="footer_inner inner">
                <small>Copyright - Yuichiro Adachi 2020 All Rights Reserved</small>
            </div>
        </div>
    </footer>
</body>
</html>
