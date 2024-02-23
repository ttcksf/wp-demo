<?php get_header();?>
    <main>
    <!-- 固定ページからスラッグに指定したページを作成しないと表示されない -->
        <section class="section contact">
            <div class="contact_inner inner">
                <!-- 管理画面の固定ページから文章を入力するとブログと同じように編集がしやすくなる -->
                <h2 class="section_title"><span><?php the_title();?></span></h2>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </section>
    </main>
<?php get_footer();?>
