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
                                <!-- ユーザーの「ブログの表示名」で表示される -->
                                <!-- 複数いる場合は投稿画面で選択する -->
                                <!-- <p><?php the_author();?></p> -->
                                <!-- 外部の寄稿者である時は会社HP、ブログサイトのURLをユーザー一覧に登録しておくことで外部リンクとして投稿者が表示される -->
                                <p><?php the_author_link();?></p>
                            </div>
                            <div class="card_text">
                                <!-- single.phpにいきたいときはaタグのhrefにパーマリンクを挿入すると自動でパスを出力してくれる -->
                                <a href="<?php the_permalink();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p>
                                    <!-- 投稿画面の本文内で「続きページ」を指定すると最初のブロックのみが表示される -->
                                    <?php the_content();?>
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
