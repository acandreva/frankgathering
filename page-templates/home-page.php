<?php 
/*
 * 
 * Template Name: Home Page
 *
 */
get_header(); ?>

    <div class="video-bg">
    	<?php the_field( 'background_video'); ?>
		<div class="quote">
	        <h2><?php the_field( 'video_overlay_main' ); ?></h2>
	        <h3><?php the_field( 'video_overlay_subtext' ); ?></h3>
        </div>
	</div>
    
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
        </div>
        <div class="row">
        	<div class="twelve columns">
	        	<div class="link-boxes">
                    <a href="#" title="prize" target="_blank">
                        <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" ></div>
                    </a>
                    <a href="https://www.jou.ufl.edu/cpic/" title="Visit the Center for Public Interest Communications"  target="_blank">
                        <div class="tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
                        </div>
                    </a>
                    <a href="http://changeville.us/" title="Visit changeville's site">
                        <div class="tri-box-last" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
                        </div>
                    </a>
                </div>
        	</div>
			<!--<div class="four columns tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
                <a href="#" title="prize" target="_blank">
                	<div class="tri-box-link"></div>
                </a>
			</div>
			<div class="four columns tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
				<a href="https://www.jou.ufl.edu/cpic/" title="Visit the Center for Public Interest Communications"  target="_blank">
                	<div class="tri-box-link"></div>
                </a>
            </div>
			<div class="four columns tri-box" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/box_bg_imgs_t.png)" >
				<a href="http://changeville.us/" title="Visit changeville's site">
                	<div class="tri-box-link"></div>
                </a>
            </div>-->
		</div>
	</div><!--end container div-->
        <?php 
			$imageArray  = get_field( 'image_with_overlay' );
			$imageAlt    = esc_attr($imageArray['alt']);
			$image       = esc_url($imageArray['sizes']['background-quote-img']);
		?>
    <div class="full-img-bg" style="background-image: url(<?php echo $image; ?>">
    	<span role="img" aria-label="<?php echo $imageAlt; ?>"> </span>
		<div class="quote">
	        <?php the_field( 'text_overlay' ); ?>
        </div>
	</div>
<?php get_footer(); ?>