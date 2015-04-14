<?php

// top bar

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

function display_primary_menu() {
  wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'menu' => 'Header Menu',
    'container' => false, // remove nav container
    'container_class' => '', // class of container
    'menu_class' => 'top-bar-menu left', // adding custom nav class
    'before' => '', // before each link <a>
    'after' => '', // after each link </a>
    'link_before' => '', // before each link text
    'link_after' => '', // after each link text
    'depth' => 5, // limit the depth of the nav
    'fallback_cb' => false, // fallback function (see below)
    'walker' => new top_bar_walker()
  ) );
}

class top_bar_walker extends Walker_Nav_Menu {

  function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
    $element->has_children = !empty( $children_elements[$element->ID] );
    $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
    $element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';

    parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
  }

  function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
    $item_html = '';
    parent::start_el( $item_html, $object, $depth, $args );

    $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

    $classes = empty( $object->classes ) ? array() : (array) $object->classes;
    if ( in_array('label', $classes) ) {
      $output .= '<li class="divider"></li>';
      $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
    }

    if ( in_array('divider', $classes) ) {
      $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
    }

    $output .= $item_html;
  }

  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $output .= "\n<ul class=\"sub-menu dropdown\">\n";
  }

}

//Foundation and Normalize Enqueue

function foundation_css() {
  wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css');
  }
add_action('wp_enqueue_scripts', 'foundation_css');

function normalize_css() {
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  }
add_action('wp_enqueue_scripts', 'normalize_css');


function foundation_js() {
  wp_enqueue_script('foundation_topbar', get_template_directory_uri() . '/js/foundation/foundation.topbar.js');

  wp_enqueue_script('foundation_javascript', get_template_directory_uri() . '/js/foundation/foundation.js');
  }
add_action('wp_enqueue_scripts', 'foundation_js');

//Widget Areas

function blank_widgets_init() {
  register_sidebar( array(
    'name' => 'Partners',
    'id' => 'partners',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar( array(
    'name' => 'Experts',
    'id' => 'experts',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar( array(
    'name' => 'Grants',
    'id' => 'grants',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar( array(
    'name' => 'Teaching',
    'id' => 'teaching',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar( array(
    'name' => 'Projects',
    'id' => 'projects',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

add_action('widgets_init', 'blank_widgets_init');

add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 300, 300 );

function custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function the_excerpt_max_charlength($charlength) {
  $excerpt = get_the_excerpt();
  $charlength++;

  if ( mb_strlen( $excerpt ) > $charlength ) {
    $subex = mb_substr( $excerpt, 0, $charlength - 5 );
    $exwords = explode( ' ', $subex );
    $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
    if ( $excut < 0 ) {
      echo mb_substr( $subex, 0, $excut );
    } else {
      echo $subex;
    }
    echo '[...]';
  } else {
    echo $excerpt;
  }
}

function php_execute($html){
if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
$html=ob_get_contents();
ob_end_clean();
}
return $html;
}
add_filter('widget_text','php_execute',100);

add_theme_support( 'html5', array( 'search-form' ) );

//Pagination

function wpbeginner_numeric_posts_nav() {

  if( is_singular() )
    return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div class="navigation"><ul>' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link() );

  echo '</ul></div>' . "\n";

}

