<!--BEGINNING OF FOOTER AREA - END SECTION CONTENT-->
    <footer>
		<div class="row footer-content">
			<div class="six columns footer-left">
				<nav role="navigation" aria-label="<?php _e( 'Footer Menu', 'frank-gathering' ); ?>">
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'depth' => 1, 
				)); ?> 
				</nav>         
			</div>
			<div class="six columns footer-right">
				<div class="footer-right-content">
				<?php dynamic_sidebar('footer-widget'); ?>
				</div>
			</div>
		</div>
    </footer><!--end footer-content-->
<?php wp_footer(); ?>
</body>
</html>