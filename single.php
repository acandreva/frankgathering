<?php get_header(); ?>
    <div class="row">
        <div class="twelve columns">
<!-- BEGIN SINGLE PHP -->
            <?php if (have_posts()) : 
                /* OUR DATA CONTEXT IS DEFINED  */
                while (have_posts()) : the_post();
                if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
                endwhile;
            endif; ?>
<!-- END SINGLE PHP -->
        </div>
    </div>
<?php get_footer(); ?>