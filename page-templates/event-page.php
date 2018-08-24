<?php 
/*
 *
 * Template Name: Event Page
 *
 */
get_header(); ?>

	<?php 
        $imageArray  = get_field( 'image_with_overlay_2' );
        $imageAlt    = esc_attr($imageArray['alt']);
        $image       = esc_url($imageArray['sizes']['background-quote-img']);
    ?>
    <div class="full-img-bg" style="background-image: url(<?php echo $image; ?>">
    	<span role="img" aria-label="<?php echo $imageAlt; ?>"> </span>
		<div class="quote">
	        <?php the_field( 'text_overlay_2' ); ?>
        </div>
	</div>
    
    <div class="container">
        <div class="row">
            <div id="event-details" class="nine columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
            <div class="three columns">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</div><!--end container div-->
<?php get_footer(); ?>