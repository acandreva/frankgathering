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
			$image    = get_field( 'image_with_overlay' );
			$alt      = $image['alt'];
			$img_src  = $image['sizes']['background-quote-image'];
		?>
        <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" class="img-full" />
	</div>
<?php get_footer(); ?>