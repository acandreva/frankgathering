<?php 
/*
 *
 * The default template for pages.
 *
 */
get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="nine columns">
                <?php if (have_posts()) : 
                    /* OUR DATA CONTEXT IS DEFINED  */
                    while (have_posts()) : the_post(); ?> 
                        <h3><?php the_title(); ?></h3>
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