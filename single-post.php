<?php 
/*
 * The template file for a generic single post.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
*/

get_header(); ?>
	<div class="container">
        <div class="row">
            <div class="twelve columns">
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
            </div>
        </div>
	</div>
<?php get_footer(); ?>