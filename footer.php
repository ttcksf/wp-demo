<footer class="footer">
        <div class="footer_top">
            <div class="footer_nav">
                <div class="footer_nav-1">
                    <ul>
                        <li><a href="#">ホーム</a></li>
                        <li><a href="#">ブログ</a></li>
                        <li><a href="#">プログラミング</a></li>
                        <li><a href="#">RPA</a></li>
                        <li><a href="#">メンタル</a></li>
                        <li><a href="#">キャリア活動</a></li>
                        <li><a href="#">コンテンツ</a></li>
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
            <!-- Atomフィード -->
            <a target="_blank" href="<?php bloginfo("atom_url");?>">RSS</a>
            <p>
                <?php
                    // function_existsは引数に指定した関数が実行できる状態で存在しているか確認する（固定ページで）
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
