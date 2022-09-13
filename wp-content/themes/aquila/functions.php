<?php
/**
 * Theme Functions
 * 
 * @package Aquila 
  */

if(!defined('AQUILA_DIR_PATH')){
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}
//
//print_r(AQUILA_DIR_PATH . '/inc/helpers/autoloader.php');
//    wp_die();

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_theme_get_instance(){
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_theme_get_instance();

function aquila_enqueue_scripts(){

    //    Register Styles
    wp_register_style( 'aquilastylesheet', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');

    //    Register bootstrap css
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/library/src/css/bootstrap.min.css', [],false, 'all');

    //    Register Scripts
    wp_register_script('aquilamainjs', get_template_directory_uri() . '/assets/main.js', [] , filemtime( get_template_directory() . '/assets/main.js'), true);

    //    Register bootstrap js
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/library/src/js/bootstrap.min.js', ['jquery'] ,false, true);

    //  Enqueue styles
    wp_enqueue_style('aquilastylesheet');
    wp_enqueue_style('bootstrap-css');

    //    Enqueue scripts
    wp_enqueue_script('aquilamainjs');
    wp_enqueue_script('bootstrap-js');

}
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts');