<?php get_header(); ?>
    <div class="row">
<!-- BEGIN PAGE PHP -->
        <div class="nine columns">
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post(); ?> 
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
<!-- END PAGE PHP -->
<!-- BEGIN SIDEBAR AREA -->
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
<!-- END SIDEBAR AREA -->
    </div>
<?php get_footer(); ?>