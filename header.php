<!DOCTYPE html>
<html>
<head>
    <title>frank</title>
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
          <div class="nine columns sitenav">
              <nav role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >
              <?php wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'depth' => 2, 
                  'container_class' => 'main-menu-header'
              )); ?>
              </nav>
				<a class="toggle-nav" href="#">&#9776;</a>
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
      </div><!--closes siteheader-->
	  <div class="mobile-siteheader">
		<div class="mobile-siteinfo">
              <a href="https://allisoncandreva.com/test">
                  <h1><?php bloginfo('name') ?></h1>
                  <p><?php bloginfo('description') ?></p>
              </a>
        </div>
		<div class="mobile-sitenav">
              <nav role="navigation" aria-label="<?php _e( 'Main Menu', 'frank-gathering' ); ?>" >
                  <ul>
                      <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'depth' => 1, 
                            'items_wrap' => '%3$s', 
                            'container' => false 
                      )); ?>
                      <span class="social-navigation">
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
              <a class="toggle-nav" href="#">&#9776;</a>
        </div>
      </div><!--closes mobile-siteheader-->
    </header>
<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->