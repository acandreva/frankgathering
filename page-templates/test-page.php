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
        <div class="row">
            <div id="event-details" class="twelve columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <?php the_content();
                    endwhile;
                endif; ?>
            </div>
        </div>
        <div class="row">
        	<div id="event-tabs" class="twelve columns">
				<input id="tab1" type="radio" name="tabs" checked>
				<label for="tab1"><em>frank</em> 2019</label>

				<input id="tab2" type="radio" name="tabs">
				<label for="tab2">schedule</label>

				<input id="tab3" type="radio" name="tabs">
				<label for="tab3">speakers</label>

				<section id="content1" class="first-tab">
				<p>
				  Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
				</p>
				<p>
				  Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
				</p>
				</section>

				<section id="content2" class="second-tab">
				<p>
				  Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
				</p>
				<p>
				  Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
				</p>
				</section>

				<section id="content3" class="third-tab">
				<p>
				  Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
				</p>
				<p>
				  Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
				</p>
				</section>
        	</div>
   		</div>         
	</div><!--end container div-->
<?php get_footer(); ?>