<?php 
/*
 * 
 * Template Name: Home Page
 *
 */
get_header(); ?>


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
    <div class="full-img-bg">                
        <?php 
			$imageArray  = get_field( 'image_with_overlay' );
			$imageAlt    = esc_attr($imageArray['alt']);
			$image       = esc_url($imageArray['sizes']['background-quote-img']);
		?>
        <img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>" class="bg-img-full" />
	</div>
<?php get_footer(); ?>