<?php
/*
Plugin Name: Frank Speaker Functionality
Description: This is a customized version of the Custom Post Popup https://gnanavel.wordpress.com/. Use this shortcode to display <strong>[CUSTOM_POST_POPUP type="post" posts_per_page="50" order="ASC"]</strong>
Version: 1.0
Author: Allison Logan
Author URI: http://allisoncandreva.com/
License: GPLv2 or later
*/


Class CustomPostPopup {

	public $plugin_dir;
	public $plugin_url;

	function  __construct(){
		global $wpdb;
		$prefix = $wpdb->prefix;
		$this->plugin_dir = plugin_dir_path(__FILE__);
		$this->plugin_url = plugin_dir_url(__FILE__);
		add_shortcode( 'CUSTOM_POST_POPUP', array($this, 'custom_post_popup_shortcode' ) );
		add_action( 'wp_enqueue_scripts', array($this,'wpsp_enqueue_scripts_styles' ));
	}
	
	function wpsp_enqueue_scripts_styles(){
		wp_enqueue_script('wpct_fancybox_js', $this->plugin_url.'js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
		wp_enqueue_style('wpct_fancybox_css', $this->plugin_url.'css/jquery.fancybox.min.css');
		wp_enqueue_script('wpct_frontend_js', $this->plugin_url.'js/wpspfrontend.js', array('jquery'), '1.0.0', true);
		wp_enqueue_style('wpsp_frontend_css', $this->plugin_url.'css/frontend.css');
	}
	
	public function custom_post_popup_shortcode($atts) {

		extract( shortcode_atts( array(
			'posts_per_page' => '50',
			'order' => 'ASC',
			'type'=>'type',		
		), $atts ) );
		
		$args = array(
			'posts_per_page' => (int) $atts['posts_per_page'],
			'post_type' =>$atts['type'],
			'order' => $atts['order'],
			'no_found_rows' => true,
		);
		
		$dispCount  = (int) $posts_per_page;
		if($dispCount==50){
			$colmd = four;
		}else if($dispCount=="4"){
			$colmd = four; 
		}else{
			$colmd = four;
		}
		$query = new WP_Query( $args  );

		$testimonials = '<div class="col-md-12">';

		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) : $query->the_post();
				 $post_id = get_the_ID();
				 
				 $featimageURL = wp_get_attachment_url( get_post_thumbnail_id($post_id) );


				$feat_image       = ( !empty($featimageURL) ) ?  '<img src="'.$featimageURL.'" class="img-responsive testimonialimg">':'';	
				//$featpopupimage   = ( !empty($featimageURL) ) ? '<img src="'.$featimageURL.'" class="img-responsive testimonialpopupimg">':'';	
				
				$imageArray  = get_field( 'speaker_portrait' );
				$imageAlt    = esc_attr($imageArray['alt']);
				$theimage       = esc_url($imageArray['sizes']['speaker-img']);
				
				$testimonials .= '<div class="speakerbox">';									
				$testimonials .= '<p class="testimonial-text">'.$this->wpse69204_excerpt().'</p>'; 
				$testimonials .= '<div class="fancyboxcont" id="post_'.$post_id.'"><div class="col-md-12 popupmailtxtcont"><img src="'.$theimage.'" alt="'.$imageAlt. '"/><h1>' .get_field('speaker_name'). '</h1><h2>' .get_field('speaker_title'). '</h2><p>' .get_field('speaker_bio'). '</p></div></div>';
			
				$testimonials .= '</div>';
			endwhile;
			wp_reset_postdata();
		} 
		$testimonials .= '</div>';
		return $testimonials;
	}

	public function wpse69204_excerpt( $post_id = null )
	{
		global $post;
		$current_post = $post_id ? get_post( $post_id ) : $post;
		$imageArray  = get_field( 'speaker_portrait' );
		$imageAlt    = esc_attr($imageArray['alt']);
		$theimage       = esc_url($imageArray['sizes']['speaker-img']);
		$excerpt .= '<a class="various" href="#post_'.$post->ID.'" title=""><img src="'.$theimage.'" alt="'.$imageAlt. '"/><h1>'. ucwords(get_field('speaker_name')) . '</h1><h2>'. ucwords(get_field('speaker_title')) . '</h2></a></p>';
		return $excerpt;
	}
}

$CustomPostPopup = new CustomPostPopup();