<?php 
/*
 * 
 * Template Name: Home Page
 *
 */
get_header(); ?>
    <div class="hero">
        <div class="home-title">
	        <h1><?php the_field( 'video_overlay_main' ); ?></h1>
	        <h2><?php the_field( 'video_overlay_subtext' ); ?></h2>
        </div>
    </div>
    
    <div class="container home-wrapper">
        <div class="row">
            <div class="eight columns home-content">
            	<h2 class="join-us-btn"><a href="https://allisoncandreva.com/test/frank-2019/">join us</a></h2>
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
            <div class="four columns home-content">
				<?php the_field( 'home_twitter_feed' ); ?>
			</div>
        </div>
        
        <div class="row">
            <div class="twelve columns link-boxes">
                <a href="#" title="prize" target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >    	
                    <span role="img" aria-label="An image of buttons from frank 2016"> </span>
                    </div>
                </a>
                <a href="https://www.jou.ufl.edu/cpic/" title="Visit the Center for Public Interest Communications"  target="_blank">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)"                         <span role="img" aria-label="An image of buttons from frank 2016"> </span>
                    </div>
                </a>
                <a href="http://changeville.us/" title="Visit changeville's site">
                    <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
                    <span role="img" aria-label="An image of buttons from frank 2016"> </span>
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