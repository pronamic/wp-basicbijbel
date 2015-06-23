<?php
/*
Plugin Name: Basic Bijbel
Plugin URI: http://www.pronamic.eu/plugins/basicbijbel/
Description: 

Version: 1.0.0
Requires at least: 3.0

Author: Pronamic
Author URI: http://www.pronamic.eu/

Text Domain: basicbijbel
Domain Path: /languages/

License: GPL

GitHub URI: https://github.com/pronamic/wp-basicbijbel
*/

function basicbijbel_enqueue_scripts() {
	wp_enqueue_script(
		'basicbijbel',
		'//www.basicbijbel.nl/scan',
		array( 'jquery' ),
		false,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'basicbijbel_enqueue_scripts' );
