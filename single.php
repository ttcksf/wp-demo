<?php get_header();?>
    <main>
        <section class="section postbox single">
            <?php if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
            <div class="postbox_inner inner">
                <div class="single_time">
                    <h3><?php the_date();?></h3>
                </div>
                <div class="single_title">
                    <h2><?php the_title();?></h2>
                </div>
                <div class="single_eyecatching">
                    <!-- functions.phpでサムネ設定の追加 -->
                    <!-- 投稿ごとにサムネが任意の場合の条件分岐 -->
                    <?php 
                        if (has_post_thumbnail()):
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src($id);
                    ?>
                       <img src="<?php echo esc_url($img[0]);?>">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/no_image.jpg">
                    <?php endif;?>
                </div>
                <div class="single_content">
                    <p><?php the_content();?></p>
                </div>
            </div>
            <?php endwhile;?>
            <?php else:?>
              
            <?php endif; ?>
        </section>

        <section class="section postbox movie">
            <div class="postbox_inner inner">
                <div class="movie_cards">
                    <div class="movie_card">
                        <a href="#">
                            <div class="movie_file">
                            </div>
                        </a>
                    </div>
                    <div class="movie_card">
                        <a href="#">
                            <div class="movie_file">
                            </div>
                        </a>
                    </div>
                    <div class="movie_card">
                        <a href="#">
                            <div class="movie_file">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section postbox related">
            <div class="postbox_inner inner">
                <h2 class="section_title"><span>関連記事</span></h2>
                <div class="cards">
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>コンテンツ</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>プログラミング</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>プログラミング</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>プログラミング</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>プログラミング</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card_img">
                                <span>プログラミング</span>
                            </div>
                            <div class="card_text">
                                <h2>Excepteur sint occaecat.</h2>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="pagenation">
                    <a class="page-numbers" href="#">1</a>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">4</a>
                    <a class="page-numbers" href="#">5</a>
                    <a class="next page-numbers" href="#"><i class="fas fa-arrow-right"></i></i></a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
