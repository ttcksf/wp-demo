<?php get_header();?>
    <main>

        <section class="section postbox search">
            <div class="postbox_inner inner">
                <div class="search_result">
                    <h2 class="section_title"><span>検索結果：<?php the_search_query();?></span></h2>
                </div>
                <div class="cards">
                    <?php if(have_posts()):
                        while(have_posts()):
                            the_post();
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
                    <?php endwhile;
                        else:
                    ?>
                    <?php endif; ?>
                </div>

                <div class="pagenation">
                    <a class="page-numbers" href="#">1</a>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">4</a>
                    <a class="page-numbers" href="#">5</a>
                    <a class="next page-numbers" href="#"><i class="fas fa-arrow-right"></i></i></a>
                </div>

                <div class="post_search">
                    <form action="#" method="post">
                        <input type="text" name="keyword" size="40" placeholder="検索">
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php get_footer();?>
