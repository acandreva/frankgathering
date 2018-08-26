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
    <div class="row">
        <div class="twelve columns">
			<?php 
				$imageArray  = get_field( 'speaker_portrait' );
				$imageAlt    = esc_attr($imageArray['alt']);
				$image       = esc_url($imageArray['sizes']['speaker-img']);
			?>
            <div id="speaker-details" class="speaker-details">
            <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>" />
			<?php 
				if(get_field('speaker_name')){ //if the field is not empty
						echo '<h1>' . get_field('speaker_name') . '</h1>'; //display it
					} 
				if(get_field('speaker_title')){ //if the field is not empty
						echo '<h2>' . get_field('speaker_title') . '</h2>'; //display it
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
<?php get_footer(); ?>