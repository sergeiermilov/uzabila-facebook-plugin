<?php 

function uzabila_facebook_add_scripts(){
	wp_enqueue_style( 'uzabila-facebook-style', plugins_url() . '/uzabila-facebook/css/facebook-style.css' );
	wp_enqueue_script( 'uzabila-facebook-script', plugins_url() . '/uzabila-facebook/js/facebook-main.js' );
}

add_action( 'wp_enqueue_scripts', 'uzabila_facebook_add_scripts', 10, 1 );