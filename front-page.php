<?php get_header();?>
    <main>
        <section class="section postbox">
            <div class="postbox_inner inner">
                <div class="cards">
                    <!-- ポストループの中で使う -->
                    <?php if(have_posts()):
                        while(have_posts()):
                            the_post();
                    ?>
                    <div class="card">
                            <div class="card_img">
                                <p><?php the_author_link();?></p>
                            </div>
                            <div class="card_text">
                                <a href="<?php the_permalink();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p>
                                    <!-- 改ページなど特に指定がなければ抜粋文を使うと楽 -->
                                    <!-- the_contentは全文出す仕様なので一覧ページでは使いにくいため -->
                                    <!-- 投稿画面の右パネルから専用の抜粋文を指定することも可能 -->
                                    <!-- 抜粋文の末尾はfunctions.phpで書く -->
                                    <!-- <?php the_content();?> -->
                                    <?php the_excerpt();?>
                                </p>
                            </div>
                    </div>
                    <?php endwhile;
                        else:
                    ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="section profile">
            <div class="profile_inner inner">
                <div class="card">
                    <div class="card_img">
                    </div>
                    <div class="card_text">
                        <div class="name">
                            <h2>山田太郎</h2>
                            <h3>IT系フリーランス</h3>
                        </div>
                        <div class="detail">
                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
