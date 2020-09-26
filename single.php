<?php
get_header();

if (have_posts()) {
    while(have_posts()){
        the_post();
        ?>
        <article>
            <header>
                <h1><?php  the_title(); ?> </h1>
            </header>
            <aside>
                <?php the_author(); ?>
                | <?php the_date(); ?>
            </aside>
            <div>
                <?php the_content(); ?>
            </div>
        </article>

        <?php
    }
}

get_footer();
