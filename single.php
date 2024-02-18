<?php get_header();?>
    <main>
        <section class="section postbox single">
            <div class="postbox_inner inner">
                <div class="single_time">
                    <h3>yyyy/mm/dd</h3>
                </div>
                <div class="single_title">
                    <h2>long&Big Title</h2>
                    <!-- デフォルトは未分類がついている -->
                    <!-- ulタグとliタグで出力される -->
                    <!-- <?php the_category();?> -->
                    <!-- 横並びにしたい時はカンマを入れるとulとliタグがなくなる -->
                    <!-- <?php the_category(",");?> -->
                    <!-- タイトルなどブロック要素の横に持っていきたいときは子要素にして引数をカンマにする -->
                    <h2>long&Big Title
                        <?php the_category(",");?>
                    </h2>
                </div>
                <div class="single_eyecatching">
                </div>
                <div class="single_content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quiepakis nostrud exercitation ullamco laboris nsi ut aliquip ex ea comepmodo consetquat. Duis aute irure dolor in reprehenderit in voluptate velit esse cfgillum dolore eutpe fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt inpeku culpa qui officia deserunt mollit anim id est laborum. 
                    </p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium poeyi doloremque laudantium, totam rem aperiam, eaque ipsa quae apsb illo inventore veritatis et quasi architecto beiatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, seprid quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliqueam quaerat voluptatem.
                    </p>
                </div>
            </div>
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
