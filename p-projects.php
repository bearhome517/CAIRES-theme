<?php 
/*
Template Name: Current projects
*/
get_header(); ?>

</div> <!-- content wrapper -->
  <div class="color-background-title">
    <div class="row">
    <div class="large-12 columns">
      <?php if (have_posts()):
        while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
        <?php endwhile;
      endif; ?>
    </div>
    </div>
  </div>




<div class="content-wrapper">
    <div class="row">
        <div class="large-12 columns">
          <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'cat' => '5',
      'posts_per_page' => 5,
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

<?php while ( have_posts()) : the_post(); ?>

                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <span class="meta">
                  <?php the_time('F jS, Y'); ?><br />
                  <!--<?php the_author_link(); ?> -->
                </span>
                <div class="thumb left">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?></a>
                  <?php endif; ?>
                </div>
                  <?php the_excerpt(); ?>
                  <p><a href="<?php the_permalink() ?>">Read More</a></p>
                  <hr>
                  <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

          </div>
  
  </div>

<!--        <div class="large-4 columns">
          <?php dynamic_sidebar( 'projects' ); ?>
        </div>
-->
    </div>
<?php get_footer(); ?>
