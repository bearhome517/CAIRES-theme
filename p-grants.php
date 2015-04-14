<?php 
/*
Template Name: Grant opportunities
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
          <?php if (have_posts()):
              while (have_posts()) : the_post(); 
                the_content();
              endwhile;
            endif; ?>
        </div>
        <div class="large-4 columns">
          <?php dynamic_sidebar( 'grants' ); ?>
        </div>

    </div>
<?php get_footer(); ?>
