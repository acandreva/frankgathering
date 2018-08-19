<?php
/**
*Background image size
*
*/
function frank_image_sizes() {
    add_image_size( 'background-quote-image', 1200, 500, array( 'center', 'top' ) ); 
}
add_action( 'after_setup_theme', 'frank_image_sizes' );

?>