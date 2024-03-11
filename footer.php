    <footer class="footer">
        <?php get_template_part("includes/footer-menu");?>

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
