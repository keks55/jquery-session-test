<?php
/*
Plugin Name: Jquery Session test
Description: Test random number jquery session value
Version:     0.0.1
Author:      Keksus
Author URI:  http://keksus.com/
Text Domain: ae
Domain Path: /languages/
License:     GPLv3

*/ 

// this is an include only WP file
if (!defined('ABSPATH')){
	die;
}


function scripts_frontend(){
	wp_enqueue_script('frontend-session', plugins_url('js/jquery.session.js',__FILE__ ), array(jquery));
	wp_enqueue_script('frontend-file', plugins_url('js/frontend.js',__FILE__ ), array(jquery));

}
add_action('wp_enqueue_scripts', 'scripts_frontend');

// captcha session in frontend.js
