<?php get_header(); ?>



    <div class="row">
        <div class="large-12 columns">
          <?php if (have_posts()):
              while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <div class="row-space">
                <?php the_content();
              endwhile;
            endif; ?>
                </div>
        </div>
<!--        <div class="large-3 columns">
          <?php
              if (is_single() && in_category('current-projects') ) {
                  dynamic_sidebar('projects');
              } elseif (is_single() && in_category('faculty-experts') ) {
                  dynamic_sidebar('experts');
              } else {
                  get_sidebar();
              }
          ?>    
        </div>
-->
    </div>



<?php get_footer(); ?>