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