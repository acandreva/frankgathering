<?php 
/*
 *
 * The default template for pages.
 *
 */
get_header(); ?>

<?php if(get_field('hero_image_with_overlay')) : {
			$imageArray  = get_field( 'hero_image_with_overlay' );
			$imageAlt    = esc_attr($imageArray['alt']);
			$image       = esc_url($imageArray['sizes']['background-quote-img']);
		?>
		<div class="full-img-bg" style="background-image: url(<?php echo $image; ?>">
			<span role="img" aria-label="<?php echo $imageAlt; ?>"> </span>
				<?php if(get_field('hero_quote_overlay')){ //if the field is not empty
					echo '<div class="quote"><p>"' . get_field( 'hero_quote_overlay' ) . '"</p><p class="quote-author">-' . get_field( 'hero_quote_overlay_author' ) . '</p></div>'; //display it
				} ?>
		</div>
    	<div class="container">
    <?php }
	else : ?>
	    <div class="container nohero">
	<?php endif; ?>
         <div class="row">
            <?php if(do_shortcode( '[wpb_childpages]' )) : {?>
                <div class="three columns page-nav">
                    <?php echo do_shortcode( '[wpb_childpages]' );?>
                </div>
                <div class="three columns mobile-page-nav">
                    <h1><a class="toggle-page-nav" href="#">menu</a></h1>
                    <?php echo do_shortcode( '[wpb_childpages]' );
                    }?>
                </div>
                <div class="nine columns">
			<?php else: ?>
            	<div class="twelve columns">
				<?php endif; 
				 if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
        </div>
	</div><!--end container div-->
<?php get_footer(); ?>