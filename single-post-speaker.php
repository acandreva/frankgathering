<?php 
/*
*
* Template Name: Speaker Post
* Template Post Type: post
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
*
*/

get_header(); ?>

    <div class="full-img-bg" style="background-image: url(http://frank.jou.ufl.edu/wp-content/themes/frank2018update/images/womanatfrank.jpg)">
    	<span role="img" aria-label="A woman attends frank"> </span>
		<div class="speaker-pg-title">
			 <?php 
                if(get_field('speaker_name')){ 
                        echo '<h1>' . get_field('speaker_name') . '</h1>';
                    } 
             ?>
        </div>
	</div>
    
    <div class="container">
        <div class="row">
            <div class="twelve columns speaker-posts">
                <?php 
                    $imageArray  = get_field( 'speaker_portrait' );
                    $imageAlt    = esc_attr($imageArray['alt']);
                    $image       = esc_url($imageArray['sizes']['speaker-img']);
                ?>
                <div id="speaker-details" class="speaker-details">
                <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>" />
                <?php 
                    if(get_field('speaker_name')){ //if the field is not empty
                            echo '<h2>' . get_field('speaker_name') . '</h2>'; //display it
                        } 
                    if(get_field('speaker_title')){ //if the field is not empty
                            echo '<h3>' . get_field('speaker_title') . '</h3>'; //display it
                        } 
                    if(get_field('speaker_bio')){ //if the field is not empty
                            echo '<p>' . get_field('speaker_bio') . '</p>'; //display it
                        } 
                ?>
                
                <?php if (have_posts()) : 
                        /* OUR DATA CONTEXT IS DEFINED  */
                        while (have_posts()) : the_post(); ?> 
                            <?php the_content();
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
	</div>
<?php get_footer(); ?>
