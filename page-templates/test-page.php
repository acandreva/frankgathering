<?php 
/*
 *
 * Template Name: Test Page
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
        <!--<div class="row">
            <div id="event-details" class="twelve columns">
                <php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <php the_content();
                    endwhile;
                endif; ?>
            </div>
        </div>-->
        <div class="row">
        	<div id="event-tabs" class="twelve columns">
				<input id="tab1" type="radio" name="tabs" class="first-tab" checked>
				<label for="tab1"><h1><em>frank</em> 2019 </h1></label>

				<input id="tab2" type="radio" name="tabs">
				<label for="tab2"><h1><?php the_field( 'event_second_tab' ); ?></h1></label>

				<input id="tab3" type="radio" name="tabs">
				<label for="tab3"><h1><?php the_field( 'event_third_tab' ); ?></h1></label>

				<section id="content1" class="first-tab">
					<?php the_field( 'event_first_tab_content' ); ?>
					<div class="event-btn">
						<a href="<?php the_field( 'invite_button_link' ); ?>">
							<?php the_field( 'invite_button_text' ); ?>
						</a>
					</div>
					<div class="event-btn">
						<a href="<?php the_field( 'registration_button_link' ); ?>" target="_blank" rel="noopener">
							register for <em>frank</em> <?php the_field( 'registration_button_year' ); ?>

						</a>
					</div>
				</section>

				<section id="content2" class="second-tab">
					<?php the_field( 'event_second_tab_content' ); ?>
				</section>

				<section id="content3" class="third-tab">
					<?php the_field( 'event_third_tab_content' ); ?>
				</section>
        	</div>
   		</div>         
	</div><!--end container div-->
<?php get_footer(); ?>