<?php 

/*
Template Name: function.php
Description: Add features to wordpress theme
*/
// add customizer.php 
require_once("templates/helpers/customizer.php");
function fn_theme_scripts(){
    // include style files
    // font-awesome icon file
    wp_enqueue_style("fontawesome", get_template_directory_uri() ."./vendor/css/all.min.css");

    // custom stylesheet
    wp_enqueue_style("custom-style", get_stylesheet_uri());

    // @media file

    wp_enqueue_style("media_responsive", get_template_directory_uri() ."./assets/css/_media.css");


    // script file
    wp_enqueue_script("jquery-file", get_template_directory_uri() ."./assets/js/jquery.js");
    wp_enqueue_script("main-file", get_template_directory_uri() ."./assets/js/main.js");
}
add_action("wp_enqueue_scripts","fn_theme_scripts");


function fn_theme_supports(){
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("html5", array("search-form"));
    add_theme_support("custom-logo");
    add_theme_support('navigation-widgets');
}

add_action("after_setup_theme", "fn_theme_supports");

add_theme_support( 'customize-selective-refresh-widgets' );


function fn_nav_menu(){
    register_nav_menus(array(
        "primary-menu" => __("Primary Menu", "text_domain"),
        "footer-menu" => __("Footer Menu", "text_domain")
    ));
}
add_action ("init", "fn_nav_menu");

function add_link_atts($atts){
    $atts['class'] ='link text-light';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_atts');


function fn_custom_excerpt_length($length){
    return 15;
}
add_filter("excerpt_length","fn_custom_excerpt_length" );


  //register menu
  register_nav_menus([
    'main-menu' => esc_html__('Main menu', 'neoubt'),
]);

//init widgets
function wp_neoubt_init_widgets(){
    register_sidebar([
        'id'=>'main-sidebar',
        'name'=> __('Main sidebar'),
        'description'=>__('Description main sidebar'),
        'before_widget'=> '<section class="widget">',
        'after_widget'=> '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title'=> '</h2>'
    ]);
}

add_action('widgets_init','wp_neoubt_init_widgets')

?>