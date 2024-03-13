<div class="footer_top">
    <div class="footer_nav">
        <div class="footer_nav-1">
            <ul>
                <?php
                    $locations = get_nav_menu_locations();
                    $footer_nav = wp_get_nav_menu_object($locations["footer_nav"]);
                    $footer_menu_items = wp_get_nav_menu_items($footer_nav->term_id);
                ?>
                <?php foreach($footer_menu_items as $items):?>
                    <li>
                        <a href="<?php echo esc_url($items->url);?>">
                            <?php echo esc_html($items->title);?>
                        </a>
                    </li>
                <?php endforeach;?>
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
