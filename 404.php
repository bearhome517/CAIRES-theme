<?php
/*
* Template Name: 404 page (Not Found)
*/
get_header(); ?>

    <div class="row">
        <div class="large-9 columns">
            <h1><?php _e('Not Found'); ?></h1>
            <h2>Sorry, your page isn't here right now</h2>
            <p>It looks like nothing was found in this location. Maybe try a search?</p>
            <?php get_search_form(); ?>

        </div>

        <div class="large-3 columns">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
