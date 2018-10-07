<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
if(!class_exists('SEB_Init')){
	class SEB_Init{
		function __construct(){
			add_action('init',array($this,'seb_init'));
		}
		
		function seb_init(){
			load_plugin_textdomain( 'supaz-easy-background', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
			do_action('seb_init');
		}
	}
	new SEB_Init();
}