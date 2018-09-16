<?php
if ( ! function_exists( 'frank_setup' ) ) :
/**
* Sets up frank theme defaults and registers support for various WordPress features
*
*
*  @since frank 1.0
*/
function frank_setup() {
	
	//Add support for post thumbnails
	add_theme_support('post-thumbnails');

	//Add support for custom image sizes
	add_image_size( 'background-quote-img', 1200, 500, array( 'center', 'center' ) ); //(cropped)
	add_image_size( 'speaker-img', 200, 200, array( 'top', 'center' ) ); //(cropped)
	
	//Add support for custom menus
	register_nav_menus( array(
		  'main-menu' => __( 'Main Menu' ),
		  'footer-menu' => __( 'Footer Menu' ),
		  'social-links' => __( 'Social Links' ),
		  'event-menu' => __( 'Event Menu' )
	));
}

endif; // frank_setup
add_action( 'after_setup_theme', 'frank_setup' );


add_filter( 'image_size_names_choose', 'frank_img_sizes' );
 
function frank_img_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'background-quote-img' => __( 'Background for quote' ),
        'speaker-img' => __( 'Speaker' ),
    ) );
}

/*-------------- Enqueue Styles--------------- */

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/burger-menu.js', array( 'jquery' ) );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ) );
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

/*-------------- List Child Pages --------------- */

function wpb_list_child_pages() { 
	global $post; 	 
		if ( is_page() && $post->post_parent )
			$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
		else
			$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
		 if ( $childpages ) {
			$string = '<ul>' . $childpages . '</ul>';
		}
	return $string;
}
 
add_shortcode('wpb_childpages', 'wpb_list_child_pages');

/*-------------- Search Box --------------*/
add_theme_support('html5', array('search-form'));


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
	if ( !warn && ( num_menu > 6 ) ) {
	warn = true;
	alert('warning: Top level menu Items are limited to 6!');
	
	}
	});
	$('#update-nav-menu').on('submit', function(){
	var num_menu = $('#menu-to-edit').children('.menu-item-depth-0').length;
	if ( num_menu > 6 ) {
	alert('error: Top level menu Items are limited to 6!');
	return false;
	}
	});
	})
</script>
<?php
	}
	add_action('admin_footer', 'custom_admin_js');

?>