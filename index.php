<?php get_header(); ?>
    <section class="row">
        <div class="twelve columns">
<!-- BEGIN LOOP -->
                <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="post-thumbnail-container">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('thumbnail');
                                }
                            ?>
                        </div>
                        <?php the_excerpt(); ?>
                        <div class="clear"></div>
                    <?php } // end while
                } // end if
                ?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>

