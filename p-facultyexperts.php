<?php 
/*
Template Name: Faculty experts
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
        <div class="large-8 columns">
        <h3>Search by name or keyword</h3>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>category/faculty-experts">
  <label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
  <input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'cat' => '9',
      'posts_per_page' => 10,
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
      'orderby'  => 'meta_value',
      'order'                  => 'ASC',
      'meta_key' => 'lastname',
      'meta_query' => array(
        array(
          'key'     => 'lastname',
          'value'   => null,
          'compare' => '!=' // Make sure the user's job title field has a value (i.e. job_title != null)
        )

      ), // End of meta_query
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
<hr>
<?php while ( have_posts()) : the_post(); ?>
                 <div class="thumb faculty left">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?></a>
                  <?php endif; ?>
                </div>
                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                <em><?php echo get_post_meta($post->ID, 'title', true) ?></em><br>
                <em><?php echo get_post_meta($post->ID, 'department', true) ?></em>
                <hr>

<?php endwhile ?>

<?php wp_reset_query();  // Restore global post data
?>

</div>

        <div class="large-4 columns">
          <?php dynamic_sidebar( 'experts' ); ?>
        </div>

    </div>
<?php get_footer(); ?>
