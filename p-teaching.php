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

                <h3>Search by name or keyword</h3>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>category/teaching-resources">
  <label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>



                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'cat' => '10',
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
                <p><?php the_excerpt_max_charlength(280); ?>
                <a href="<?php the_permalink(); ?>">Read more</a></p>
                  <hr>
                  <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

          </div>
  
  </div>
</div>
<?php get_footer(); ?>
