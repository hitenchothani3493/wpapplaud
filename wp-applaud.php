<?php
/*
Plugin Name: WP Applaud
Plugin URI: http://wpapplaud.com
Description: Add "like" functionality to your posts and pages
Version: 1.3
Author: WP Applaud
Author URI: http://wpapplaud.com
*/


global $wpApplaud;

/*
 * Include Settings for wp_applaud
*/
require_once(__DIR__.'/functions/settings.php');
new wpApplaudSettings();

/*
 * Include Post Specific Settings for wp_applaud
*/
require_once(__DIR__.'/functions/post-settings.php');
new wpApplaudPostSettings();

/*
 * Include functional and display assets of plugin
*/
require_once(__DIR__.'/functions/frontend.php');
new wpApplaud();


/*
 * Include functionality to add widget
*/
require_once(__DIR__.'/functions/widgets.php');
new wpApplaudWidgetsRegister();

/*
 * Function call for template use
 * Can be used directly in template by
 *
 * if( function_exists('wp_applaud') ) wp_applaud();
 *
*/
function wp_applaud() {
	$wpApplaud = new wpApplaud();
    echo $wpApplaud->do_likes(); 
}

?>