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
                                <h2>
                                    <!-- single.phpにいきたいときはaタグのhrefにパーマリンクを挿入すると自動でパスを出力してくれる -->
                                    <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                                </h2>
                                <p>
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
                        <!-- アバターのみユーザーがログインすることで変更できる -->
                        <!-- ID、サイズ -->
                        <?php echo get_avatar(2, 100);?>
                    </div>
                    <div class="card_text">
                    <?php $userdata = get_userdata(2); ?>
                        <div class="name">
                            <h2><?php echo esc_html($userdata->display_name)?></h2>
                            <h3><?php echo esc_html($userdata->email)?></h3>
                        </div>
                        <div class="detail">
                            <p>
                            <?php echo esc_html($userdata->description)?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
