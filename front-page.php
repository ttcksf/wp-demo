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
                    <?php
                        // PHPだけを出力する
                        $cat = get_category_by_slug("PHP");
                        // var_dump($cat);
                        $cat_id = $cat->term_id;
                        $cat_link = get_category_link($cat_id);
                    ?>
                    <a href="<?php echo esc_url($cat_link);?>">PHPの一覧はこちら</a>
                    
                    <?php
                        // カテゴリー一覧を出す
                        $categories = get_categories();
                        if(!empty($categories)):
                    ?>
                    <?php foreach($categories as $category): ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                    <?php  endif; ?>
                    <div class="card">
                            <div class="card_img">
                                <p><?php the_author_link();?></p>
                            </div>
                            <div class="card_text">
                                <a href="<?php the_permalink();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p>
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
