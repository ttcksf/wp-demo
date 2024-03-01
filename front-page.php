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
                        $tag = get_term_by('slug', 'wordpress', 'post_tag');
                    ?>
                    <?php 
                        $tag_link = get_tag_link($tag->term_id);
                    ?>
                    <a href="<?php echo esc_url($tag_link);?>"><?php echo $tag->name;?></a>
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
