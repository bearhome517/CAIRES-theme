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
        <div class="large-9 columns">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'posts_per_page' => 10,
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
      'fields'  => 'ID',
      'exclude' => array(
        1
      ),

    );
query_posts ($args); ?>

<div class="pagination-centered">
<ul class="text-center pagination">
  <?php wpbeginner_numeric_posts_nav(); ?>
  <!--<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
  <div class="alignright"><?php next_posts_link('More &raquo;') ?></div>-->
</ul>
</div>
            <?php if (have_posts()): ?>
            <?php while ( have_posts()) : the_post(); ?>


                      <h4><?php the_title(); ?></h4>
                      <?php the_excerpt(); ?>
                      <hr>
                  <?php endwhile; ?>
<div class="pagination-centered">
<ul class="text-center pagination">
  <?php wpbeginner_numeric_posts_nav(); ?>
  </ul></div>
                    <?php wp_reset_query(); ?>

            <?php else : ?>
                <h3><?php _e('Nothing Found'); ?></h3>
                <p><?php _e('Sorry, but nothing matched your search criteria. Please try again.'); ?></p>
            <?php endif; ?>


        </div>
<!--End of Search Area -->
        <div class="large-3 columns">
            <?php dynamic_sidebar ( 'partners'); ?>
        </div>
    </div>

<?php get_footer(); ?>
