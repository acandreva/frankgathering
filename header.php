<!DOCTYPE html>
<html>
<head>
    <title></title>
<?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class= "container">
        <header class="row">
            <div class="nine columns">
                <h1><?php bloginfo('name') ?></h1>
                <p><?php bloginfo('description') ?></p>
            </div>
<!--Search Form -->
            <div class="three columns">
                <?php get_search_form(); ?>
            </div>
        </header>
        <div class="row">
            <div class="twelve columns">
                <?php wp_nav_menu(array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                )); ?>
            </div>
        </div>

<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->
