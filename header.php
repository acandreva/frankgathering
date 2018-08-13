<!DOCTYPE html>
<html>
<head>
    <title>frank</title>
<?php wp_head(); ?>
</head>
<body>
    <div class= "container">
        <header class="row">
            <div class="three columns">
                <h1><?php bloginfo('name') ?></h1>
                <p><?php bloginfo('description') ?></p>
			</div>
            <div class="nine columns">
				<nav role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >

                <?php wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'depth' => 2, 
                    'container_class' => 'main-menu-header'
                )); ?>
                </nav>
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
