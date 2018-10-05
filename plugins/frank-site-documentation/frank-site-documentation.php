<?php
/*
Plugin Name: Frank Site Documentation
Description: This is a custom plugin for this site: frank.jou.ufl.edu. This plugin adds helpful guidelines to the help tab.
Version: 1.0
Author: Allison Logan
Author URI: http://allisoncandreva.com/
License: GPLv2 or later
*/

function setup_help_tab() {
 
$screen = get_current_screen();
 
if ( 'post' == $screen->post_type ) {
 
get_current_screen()->add_help_tab( array(
'id' => 'post',
'title' => ( 'How to Publish a Blog Post' ),
'content' => '<strong>To publish a blog post, please follow the steps below.</strong>
<ul>
    <li>Locate big, blue <em>Publish</em> button.</li>
    <li>Click it.</li>
    <li>Well done.</li>
</ul>
',
) );
}
}
add_action( 'admin_head', 'setup_help_tab' );