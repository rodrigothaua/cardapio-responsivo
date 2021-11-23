<?php
//BOOTSTRAP - STYLES - BOOTSTRAP ICONS
function themebs_enqueue_styles() {
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

  wp_register_style( 'bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css' );
  wp_enqueue_style('bootstrap_icons');
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

//BOOTSTRAP JS - POPPER - CDN
function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
  array( 'jquery' ) );

  wp_register_script( 'cdn-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' );
  wp_enqueue_script('cdn-js');

}
add_action( 'wp_footer', 'themebs_enqueue_scripts');

//POST TYPE PRODUTOS
require get_template_directory() . '/custom_post_types/cadastrar_produto.php';

//FILTROS
if (!is_admin()) add_action( 'wp_enqueue_scripts', 'add_jquery_to_my_theme' );

function add_jquery_to_my_theme() {
// scrap WP jquery and register from google cdn - load in footer
wp_deregister_script('jquery');
wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js", false, null, true );    
// load jquery
wp_enqueue_script('jquery');
}

if (!is_admin()) add_action( 'wp_enqueue_scripts', 'load_isotope' );

function load_isotope() {
// script will load in footer
wp_enqueue_script( 'isotope-js',  get_stylesheet_directory_uri() . '/path/to/jquery.isotope.min.js', true );
}