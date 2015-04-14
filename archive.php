<?php
/*
* Template name: Archive
*/
get_header(); ?>

    <div class="row">
        <div class="large-9 columns">
            <?php wpbeginner_numeric_posts_nav(); ?>

            <?php the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h2>Archives by Month:</h2>
                    <ul><?php wp_get_archives('type=monthly'); ?></ul>
        </div>
        <div class="large-3 columns">
                <h2>Archives by Subject:</h2>
                    <ul><?php wp_list_categories(); ?></ul>
        </div>
    </div>

<?php get_footer(); ?>
