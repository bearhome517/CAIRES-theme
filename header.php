<!DOCTYPE HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UF CAIRES</title>

      <?php wp_head(); ?>

      <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/foundation.css">
      <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
      <script src="<?php bloginfo('template_directory');?>/js/vendor/modernizr.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-61743305-1', 'auto');
  ga('send', 'pageview');
 
</script>

  </head>

<body>

<div class="color-background-top">
  <div class="row">

<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <!--<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <?php display_primary_menu(); ?>

    <ul class="right">
      <li><a href="http://www.facebook.com/UFCAIRES" target="_blank"><img style="margin-top: 2px;" src="<?php bloginfo('template_directory');?>/img/facebook2.png" alt="Facebook" /></a></li>
      <li class="has-form">
       <div class="row collapse">
        <div class="medium-12 columns">
          <?php get_search_form(); ?>
          </div>
        </div>
      </li>
    </ul>

  </section>
</nav>

  </div>
</div>

<div class="content-wrapper">
  <div class="row row-space">
    <div class="large-2 columns">
      <a href="<?php $url = home_url('/');
        echo $url;?>"><img src="<?php bloginfo('template_directory');?>/img/headerlogo.png" alt="UF Caires logo" /></a>
    </div>
    <div class="medium-6 columns header">
      <a href="<?php $url = home_url('/');
        echo $url;?>"><h1><?php bloginfo('name'); ?></h1></a>
      <p class="tagline"><?php bloginfo('description'); ?></p>
    </div>
    <div class="medium-4 columns hot-link">
      <a class="hot-link-top right" href="<?php $url = home_url('/');
        echo $url;?>current-projects" title="See our current projects"></a>
      <a class="hot-link-bottom right" href="<?php $url = home_url('/');
        echo $url;?>faculty-experts" title="Join our network of experts"></a>
    </div>
  </div>
