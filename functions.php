<?php

//HEAD
function custom_css() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'custom_css' );

//SCRIPTS FOOTER
function scripts_footer() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap-bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_footer', 'scripts_footer' );

//SCRIPTS EXTERNOS
function custom_scripts_method(){
    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_footer', 'custom_scripts_method');