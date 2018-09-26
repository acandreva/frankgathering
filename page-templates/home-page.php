<?php 
/*
 * 
 * Template Name: Home Page
 *
 */
get_header(); ?>
    <div class="hero">
        <div class="home-overlay">
            <div class="home-title">
                <h1><?php the_field( 'video_overlay_main' ); ?></h1>
                <h2><?php the_field( 'video_overlay_subtext' ); ?></h2>
            </div>
        </div>
    </div>
    
    <div class="container home-wrapper">
        <div class="row">
            <div class="twelve columns home-content">
            	<h2 class="join-us-btn"><a href="https://allisoncandreva.com/test/frank-2019/">join us</a></h2>
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
        </div>
        
        <div class="row">
            <div class="four columns twitter-feed">
				<?php the_field( 'home_twitter_feed' ); ?>
			</div>
            <div class="eight columns link-boxes">
                <a href="<?php the_field( 'button_1_link' ); ?>" title="<?php the_field( 'button_1_text' ); ?>" target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_img_1.png)" >    	
                    <span role="img" aria-label="An image of buttons from frank 2016"> </span>
                    <h5><?php the_field( 'button_1_text' ); ?></h5>
                    </div>
                </a>
                <a href="<?php the_field( 'button_2_link' ); ?>" title="<?php the_field( 'button_2_text' ); ?>" target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_img_2.png)" >    	
                    <span role="img" aria-label="A woman attending frank 2016"> </span>
                    <h5><?php the_field( 'button_2_text' ); ?></h5>
                    </div>
                </a>
                <a href="<?php the_field( 'button_3_link' ); ?>" title="<?php the_field( 'button_3_text' ); ?>" target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_img_3.png)"                         <span role="img" aria-label="An image of buttons from frank 2016"> </span>
                    <h5><?php the_field( 'button_3_text' ); ?></h5>
                    </div>
                </a>
                <a href="<?php the_field( 'button_4_link' ); ?>" title="<?php the_field( 'button_4_text' ); ?>" target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_img.png)" >
                    <span role="img" aria-label="A woman with an umbrella at frank"> </span>
                    <h5><?php the_field( 'button_4_text' ); ?></h5>
                    </div>
                </a>
            </div>
        </div>
	</div><!--end container div-->
    
        <?php 
			$imageArray  = get_field( 'image_with_overlay' );
			$imageAlt    = esc_attr($imageArray['alt']);
			$image       = esc_url($imageArray['sizes']['background-quote-img']);
		?>
    <div class="full-img-bg" style="background-image: url(<?php echo $image; ?>">
    	<span role="img" aria-label="<?php echo $imageAlt; ?>"> </span>
		<div class="quote-home">
	        <?php the_field( 'text_overlay' ); ?>
        </div>
	</div>
<?php get_footer(); ?>