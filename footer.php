<!--BEGINNING OF FOOTER AREA - END SECTION CONTENT-->
    <footer class="row">
        <div class="footer-content">
            <div class="eight columns">
                <nav role="navigation" aria-label="<?php _e( 'Footer Menu', 'frank-gathering' ); ?>">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'depth' => 1, 
                )); ?> 
                </nav>         
            </div>
            <div class="four columns footer-right">
                <div class="footer-right-content">
                <?php dynamic_sidebar('footer-widget'); ?>
                <img src="http://www.allisoncandreva.com/test/wp-content/themes/frank/images/franklogo.png" title="frank logo" alt="An image of the frank logo." />
                <img src="http://www.allisoncandreva.com/test/wp-content/themes/frank/images/uf_signature.png" title="UF Signature" alt="An image of the UF signature." />
                </div>
            </div>
        </div><!--end footer-content div-->
    </footer>
<?php wp_footer(); ?>
</body>
</html>