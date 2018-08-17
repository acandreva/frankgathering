<!DOCTYPE html>
<html>
<head>
    <title>frank</title>
<?php wp_head(); ?>
</head>
<body>
    <div class= "container">
        <header class="row">
            <div class="three columns siteinfo">
                <a href="https://allisoncandreva.com/test">
                    <h1><?php bloginfo('name') ?></h1>
                    <p><?php bloginfo('description') ?></p>
                </a>
			</div>
            <div class="nine columns siteheader">
				<nav class="sitenav"role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >

                <?php wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'depth' => 2, 
                    'container_class' => 'main-menu-header'
                )); ?>
                </nav>
	
				<?php if ( has_nav_menu( 'social-links' ) ) : ?>
            	<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links', 'frank-gathering' ); ?>">
				<?php wp_nav_menu(array(
                        'theme_location' => 'social-links',
                        'depth'          => 1,
                        'container_class'     => 'social-links-menu',
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',                 
				 ) ); ?>
                <?php get_search_form(); ?>
                 </nav>
				<?php endif; ?>
            </div>
        </header>
    <!--<div class="row">
            <div class="three columns">
            <p>h1</p>
            </div>
            <div class="three columns search-div">
                        <p>h1</p>
            </div>
<!--Search Form --
            <div class="three columns">
                <php get_search_form(); ?>
            </div>
        </div>

<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->
