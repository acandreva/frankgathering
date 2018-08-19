<?php

/*-------------- Enqueue Styles--------------- */

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function enqueue_icon_stylesheet() {
	wp_register_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'enqueue_icon_stylesheet' );


/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Footer Widget One--- */
    register_sidebar( array(
        'name' => ('Footer Widget'),
        'id' => 'footer-widget',
        'description' => 'widget for the footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu--------------- */
/*add_theme_support('menus');*/

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'social-links' => __( 'Social Links' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*-------------- Search Box --------------*/
add_theme_support('html5', array('search-form'));

/*-------------- Image Sizes --------------*/
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size( 'background-quote-img', 1200, 500, array( 'center', 'center' ) ); //(cropped)
}

/*-------------- Enable Post Thumbnails--------------- */
add_theme_support('post-thumbnails');

?>