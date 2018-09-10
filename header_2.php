<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="event,journalism,communications,conference,summit,speakers,gathering,meeting,gainesville,university,florida,learning,education,sessions">
    <meta name="author" content="Allison Logan">
    <title>frank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>
    <header> 
      <div class="row siteheader">
          <div class="three columns siteinfo">
              <a href="https://allisoncandreva.com/test">
                  <h1><?php bloginfo('name') ?></h1>
                  <p><?php bloginfo('description') ?></p>
              </a>
          </div>
          <div class="seven columns sitenav">
              <nav role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >
              <?php wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'depth' => 2, 
                  'container_class' => 'main-menu-header'
              )); ?>
              </nav>
		  </div>
          <div class="two columns socialnav">
			  <?php if ( has_nav_menu( 'social-links' ) ) : ?>
              <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links', 'frank-gathering' ); ?>">
				  <?php wp_nav_menu(array(
                          'theme_location' => 'social-links',
                          'depth'          => 1,
                          'container_class'     => 'social-links-menu',
                          'link_before'    => '<span class="screen-reader-text">',
                          'link_after'     => '</span>',                 
                   ) ); ?>
               </nav>
              <?php endif; ?>
          </div>
      </div><!--closes siteheader-->
	  <div class="mobile-siteheader">
		<div class="mobile-siteinfo">
              <a href="https://allisoncandreva.com/test">
                  <h1><?php bloginfo('name') ?></h1>
                  <p><?php bloginfo('description') ?></p>
              </a>
        </div>
		<div id="myNav" class="overlay"><!--mobile-sitenav-->
			<a href="javascript:void(0)" class="closebtn" id="mobile-close">&times;</a>
			<div class="overlay-content"> 
				<nav role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >
					  <ul>
						  <?php wp_nav_menu(array(
								'theme_location' => 'main-menu',
								'depth' => 1, 
								'items_wrap' => '%3$s', 
								'container' => false 
						  )); ?>
						  <span class="p-social-navigation">
						  <?php wp_nav_menu(array(
								  'theme_location' => 'social-links',
								  'depth'          => 1,
								  'link_before'    => '<span class="screen-reader-text">',
								  'link_after'     => '</span>', 
								  'items_wrap' => '%3$s', 
								  'container' => false                
						   ) ); ?>
						   </span>
					   </ul>
				   </nav>
              <!--<a class="toggle-nav" href="#">&#9776;</a>-->
			</div><!--close overlay-content-->
        </div><!--closes mobile-sitenav-->
		<span id="mobile-open">menu</span>
      </div><!--closes mobile-siteheader-->
    </header>
<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->