<?php get_header(); ?>

<section class="row slider">
    <div class="large-12 columns">
      <!--<img src="<?php bloginfo('template_directory');?>/images/slicks-logo.png" alt="Slick's Logo" />-->
      <?php echo do_shortcode("[metaslider id=18]"); ?>
    </div>
</section>

  <div class="row front-widgets">
    <div class="large-8 columns">
      <h1>Gainesville's top-rated body shop & mechanic</h1>
      <p>Slick's Auto Body & Repair is a family-owned and operated auto repair facility serving Gainesville, Florida, since 1986. From the moment you walk into our modern repair facility you will be treated as our friend and neighbor. Our mission is to provide outstanding customer service that will exceed your expectations.</p>
      <p>Our five area auto repair facilities offer complete auto repair and maintenance, specializing in transmission and air conditioning repairs. We are constantly updating our equipment to stay at the leading edge of the automotive industry. Our staff has close to 100 years combined experience in the automotive service industry.</p>
      <p>Our customers are the most important aspect of our business. Let’s be honest, without you we would have no cars or trucks to repair. We want to earn your business by being honest and up-front when it comes time to repair your vehicle. At the time of estimating your repair costs, we will take the time to explain everything involved in the repair process and answer all of your questions. We believe, whether it is done face to face or over the phone, nothing is more important than taking the time to make sure our customers understand what is being done to repair their vehicle.</p>
      <p>By approaching every customer as a friend or neighbor, clearly communicating the details of your auto repairs and costs, as well as delivering outstanding repair work, we know you will be satisfied with your car repair experience.</p>
      <hr />
      <h1>Nuts & Bolts blog</h1>
      <?php 
        if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>">Read more.</a></p>
  <?php } // end while
} // end if
?>
    </div>
    <div class="large-4 columns">
      <?php dynamic_sidebar('main-one'); ?>
    </div>

  </div>

<?php get_footer(); ?>
