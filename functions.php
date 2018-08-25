<?php

/*-------------- Enqueue Styles--------------- */

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'jquery.sweet-dropdown.min', get_stylesheet_uri() );
  wp_enqueue_script( 'jquery.sweet-dropdown.min', get_template_directory_uri() . '/js/jquery.sweet-dropdown.min.js', array(), '1.0.0', true );
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

/*-------------- Menu Limit--------------- */

function custom_admin_js() {
$screen = get_current_screen();
if ( $screen->id != 'nav-menus' )
	return;
?>
<script type="text/javascript">
	jQuery(function($){
	var warn = false;
	$('.submit-add-to-menu').on('click', function(){
	var num_menu = $('#menu-to-edit').children('.menu-item-depth-0').length;
	num_menu += $('.menu-item-checkbox:checked').length;
	if ( !warn && ( num_menu > 7 ) ) {
	warn = true;
	alert('warning: Top level menu Items are limited to 7!');
	
	}
	});
	$('#update-nav-menu').on('submit', function(){
	var num_menu = $('#menu-to-edit').children('.menu-item-depth-0').length;
	if ( num_menu > 7 ) {
	alert('error: Top level menu Items are limited to 7!');
	return false;
	}
	});
	})
</script>
<?php
	}
	add_action('admin_footer', 'custom_admin_js');

?>