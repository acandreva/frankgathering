<?php 
/*
 *
 * Template Name: Event Page
 *
 */
get_header(); ?>

	<?php 
        $imageArray  = get_field( 'event_page_image' );
        $imageAlt    = esc_attr($imageArray['alt']);
        $image       = esc_url($imageArray['sizes']['background-quote-img']);
    ?>
    <div class="event-full-img-bg">
			<img src="<?php echo $image; ?>" alt="<?php echo $imageAlt; ?>">
	</div>
    
    <div class="container">
        <div class="row">
            <div class="two columns page-nav">
                <nav role="navigation" aria-label="<?php _e( 'Event Menu', 'frank-gathering' ); ?>" >
                <?php wp_nav_menu(array(
                  'theme_location' => 'event-menu',
                  'depth' => 1, 
                  'container_class' => 'event-side-menu'
                )); ?>
                </nav>            
            </div>
            <div class="three columns mobile-page-nav">
              	<h1><a class="toggle-page-nav" href="#">menu</a></h1>
                <nav role="navigation" aria-label="<?php _e( 'Event Menu', 'frank-gathering' ); ?>" >
                    <?php wp_nav_menu(array(
                      'theme_location' => 'event-menu',
                      'depth' => 1, 
                      'container_class' => 'mobile-event-side-menu'
                    )); ?>
                </nav> 
			</div>            
        	<div id="event-tabs" class="ten columns">
				<input id="tab1" type="radio" name="tabs" class="first-tab" checked>
				<label for="tab1"><h1><?php the_field( 'event_first_tab' ); ?></h1></label>

				<input id="tab2" type="radio" name="tabs">
				<label for="tab2"><h1><?php the_field( 'event_second_tab' ); ?></h1></label>

				<input id="tab3" type="radio" name="tabs">
				<label for="tab3"><h1><?php the_field( 'event_third_tab' ); ?></h1></label>

				<section id="content1" class="first-tab">
					<?php the_field( 'event_first_tab_content' ); ?>
                    <div class="event-btns">
                        <div class="event-btn">
                            <a href="<?php the_field( 'invite_button_link' ); ?>">
                                <?php the_field( 'invite_button_text' ); ?>
                            </a>
                        </div>
                        <div class="event-btn">
                            <a href="<?php the_field( 'registration_button_link' ); ?>" target="_blank" rel="noopener">
                                <?php the_field( 'registration_button_text' ); ?>
    
                            </a>
                        </div>
					</div>
                    <div class="sponsor-logos"><h2>Sponsors</h2>
						<?php the_field( 'event_sponsor_logos' ); ?>
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