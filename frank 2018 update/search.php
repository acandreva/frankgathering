<?php
/*Template Name: Search Page*/

get_header(); ?>

    <div class="full-img-bg" style="background-image: url(https://allisoncandreva.com/test/wp-content/themes/frank/images/womanatfrank.jpg)">
    	<span role="img" aria-label="A woman attends frank 2018"> </span>
		<div class="quote">
	        <p>I really had an amazing time attending frank this year. There were so many opportunities to learn from some of the most talented people in the industry. I look forward to other frank events in the future.</p>
            <p style="text-align:right;">– anonymous, frank 2018</p>
        </div>
	</div>
    
  <div class="container">
    <div class="row">
        <div class="twelve columns">
            <h2><?php printf(__('Search results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h2>
            <?php if (have_posts()) : 
                while (have_posts()) : the_post(); ?> 
                    <a href="<?php the_permalink(); ?>">
                    	<h3><?php the_title(); ?></h3>
                    </a>
                    <?php the_content();
                endwhile;
            else : ?>
            <h2>Nothing Found</h2>
            <p>Sorry, nothing matched your search criteria. Please try again with different search terms.</p>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>

