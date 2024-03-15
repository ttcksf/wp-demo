<?php get_header();?>
    <main>

    <!-- Custom Post Type UIを使う -->
    <!-- CPTUI→投稿タイプの追加と編集 -->
    <!-- スラッグ（URL）を英語、ラベル２箇所（管理画面での表示名）を同じ日本語にする -->
    <!-- 編集するには「投稿タイプの編集」タブ→選択からラベルを選択する -->
    <!-- アーカイブはTrue、サポートは必要な入力項目にチェック -->
    <!-- ラベル名から新規投稿を作成できるようになる -->
        <section class="section postbox">
            <?php if(!is_front_page()):?>
                <?php if(function_exists("bcn_display")):?>
                    <?php bcn_display(); ?>
                <?php endif;?>
            <?php endif;?>
            <div class="postbox_inner inner">
                <div class="cards">
                    <?php if(have_posts()):
                        $args = [
                            "orderby" => "date",
                            "order" => "DESC",
                            "posts_per_page" => 3,
                            "post_type" => "post"
                        ];

                        $query = new WP_Query($args);

                        while($query->have_posts()):
                            $query->the_post();
                    ?>
                    <div class="card">
                        <a href="<?php the_permalink();?>">
                            <div class="card_img">
                                <span>コンテンツ</span>
                            </div>
                            <div class="card_text">
                                <h2><?php the_title();?></h2>
                                <p><?php the_excerpt();?></p>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                    <?php else:?>
                        <p>投稿がありません。</p>
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
