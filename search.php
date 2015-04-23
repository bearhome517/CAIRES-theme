<?php
/*
* Template Name: Search Page
*/
get_header(); ?>

</div> <!-- content wrapper -->
  <div class="color-background-title">
    <div class="row">
    <div class="large-12 columns">
      <h2>Search results</h2>
    </div>
    </div>
  </div>

<div class="content-wrapper">
    <div class="row">
        <div class="large-12 columns">
            <?php $posts=query_posts($query_string . '&posts_per_page=-1'); ?>
            <?php if (have_posts()): ?>
            <?php while ( have_posts()) : the_post(); ?>


                      <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                      <?php the_excerpt(); ?>
                      <hr>
                  <?php endwhile; ?>

            <?php else : ?>
                <h3><?php _e('Nothing Found'); ?></h3>
                <p><?php _e('Sorry, but nothing matched your search criteria. Please try again.'); ?></p>
            <?php endif; ?>
                    <?php wp_reset_query(); ?>

        </div>
    </div>

<?php get_footer(); ?>
