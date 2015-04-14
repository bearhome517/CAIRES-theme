<?php 
/*
Template Name: Home (full-width)
*/
get_header(); ?>
<div class="row row-space"></div>
<div class="row">
  <div class="large-12 columns">
      <?php if (have_posts()):
              while (have_posts()) : the_post(); 
                the_content();
              endwhile;
            endif; ?>
  </div>
</div>

    <div class="row">
        <div class="medium-4 columns">
            <?php $cat_id = 8;
              $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
              if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                <p class="text-justify"><?php the_excerpt_max_charlength(280); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read more.</a></p>
            <?php endwhile; endif; ?>
        </div>
        <div class="medium-4 columns">
            <?php $cat_id = 8;
              $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id), 'offset' => 1));
              if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                <p class="text-justify"><?php the_excerpt_max_charlength(280); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read more.</a></p>
            <?php endwhile; endif; ?>
        </div>
        <div class="medium-4 columns">
            <?php $cat_id = 8;
              $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id), 'offset' => 2));
              if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>
                <p class="text-justify"><?php the_excerpt_max_charlength(280); ?></p>
                <p><a href="<?php the_permalink(); ?>">Read more.</a></p>
            <?php endwhile; endif; ?>
        </div>

    </div> 
<?php get_footer(); ?>
