<!--BEGINNING OF FOOTER AREA - END SECTION CONTENT-->
        <footer class="row">
            <div class="four columns">
				<nav role="navigation" aria-label="<?php _e( 'Footer Menu', 'frank-gathering' ); ?>">
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'depth' => 1, 
                )); ?> 
                </nav>         
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('footer-widget-one'); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('footer-widget-two'); ?>
            </div>
        </footer>
    </div><!--end container div-->
<?php wp_footer(); ?>
</body>
</html>