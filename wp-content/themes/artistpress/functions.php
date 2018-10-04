<?php
// Add scripts and stylesheets
function artistpress_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '2.0' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'info', get_template_directory_uri() . '/js/info.js', array( 'jquery', 'bootstrap'), '1', true );
	wp_enqueue_script( 'load', get_template_directory_uri() . '/js/load.js', array( 'jquery' ,'bootstrap', 'info' ), '1', true );
}

add_action( 'wp_enqueue_scripts', 'artistpress_scripts' );

// Add Google Fonts
function artistpress_google_fonts() {
	wp_register_style('Titillium_Web', 'http://fonts.googleapis.com/css?family=Titillium+Web:900');
	wp_enqueue_style( 'Titillium_Web');
	wp_register_style('Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'Montserrat');
}

add_action('wp_print_styles', 'artistpress_google_fonts');
