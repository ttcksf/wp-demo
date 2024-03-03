<?php get_header();?>
    <main>
        <section class="section contact">
            <!-- Breadcrumb NavXT -->
            <!-- トップページは外す（ブログサイトならあり？） -->
            <?php
                if(!is_front_page()){
                    if(function_exists("bcn_display")){
                        bcn_display();
                    }
                }
            ?>
            <div class="contact_inner inner">
                <h2 class="section_title"><span><?php the_title();?></span></h2>
                <p><?php the_content();?></p>
            </div>
        </section>
    </main>
<?php get_footer();?>
