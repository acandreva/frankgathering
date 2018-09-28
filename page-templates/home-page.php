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
                <h2><?php the_field( 'video_overlay_main' ); ?></h2>
                <h3><?php the_field( 'video_overlay_subtext' ); ?></h3>
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
            <div class="twelve columns link-boxes">
				<!--first button-->
				<?php 
					$image1Array  = get_field( 'button_1_image' );
					$image1Alt    = esc_attr($image1Array['alt']);
					$image1       = esc_url($image1Array['sizes']['home-btn']);
				?>
                <a href="<?php the_field( 'button_1_link' ); ?>" title="<?php the_field( 'button_1_text' ); ?>" target="_blank">
    				<div class="tri-box" style="background-image: url(<?php echo $image1; ?>)">
                    <span role="img" aria-label="<?php echo $image1Alt; ?>"> </span>
                    	<div class="btn-overlay">
							<h2><?php the_field( 'button_1_text' ); ?></h2>
						</div>
                    </div>
                </a>
				
				<!--second button-->
				<?php 
					$image2Array  = get_field( 'button_2_image' );
					$image2Alt    = esc_attr($image2Array['alt']);
					$image2       = esc_url($image2Array['sizes']['home-btn']);
				?>
				<a href="<?php the_field( 'button_2_link' ); ?>" title="<?php the_field( 'button_2_text' ); ?>" target="_blank">
    				<div class="tri-box" style="background-image: url(<?php echo $image2; ?>)">
                    <span role="img" aria-label="<?php echo $image2Alt; ?>"> </span>
                    	<div class="btn-overlay">
		                    <h2><?php the_field( 'button_2_text' ); ?></h2>
						</div>
                    </div>
                </a>
				
				<!--third button-->
				<?php 
					$image3Array  = get_field( 'button_3_image' );
					$image3Alt    = esc_attr($image3Array['alt']);
					$image3       = esc_url($image3Array['sizes']['home-btn']);
				?>
				<a href="<?php the_field( 'button_3_link' ); ?>" title="<?php the_field( 'button_3_text' ); ?>" target="_blank">
    				<div class="tri-box" style="background-image: url(<?php echo $image3; ?>)">
                    <span role="img" aria-label="<?php echo $image3Alt; ?>"> </span>                   
                    	<div class="btn-overlay">
							<h2><?php the_field( 'button_3_text' ); ?></h2>
						</div>
                    </div>
                </a>
				
				<!--fourth button-->
				<?php 
					$image4Array  = get_field( 'button_4_image' );
					$image4Alt    = esc_attr($image4Array['alt']);
					$image4       = esc_url($image4Array['sizes']['home-btn']);
				?>
				<a href="<?php the_field( 'button_4_link' ); ?>" title="<?php the_field( 'button_4_text' ); ?>" target="_blank">
    				<div class="tri-box-last" style="background-image: url(<?php echo $image4; ?>)">
                    <span role="img" aria-label="<?php echo $image4Alt; ?>"> </span>
                    	<div class="btn-overlay">
		                    <h2><?php the_field( 'button_4_text' ); ?></h2>
						</div>
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
    <div class="full-img-bg" style="background-image: url(<?php echo $image; ?>)">
    	<span role="img" aria-label="<?php echo $imageAlt; ?>"> </span>
		<div class="quote-home">
	        <?php the_field( 'text_overlay' ); ?>
        </div>
	</div>
<?php get_footer(); ?>