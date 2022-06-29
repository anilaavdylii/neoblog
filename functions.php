<?php 


//action hook
function theme_setup(){
    add_theme_support("title-tag");
}


add_action("after_setup_theme","theme_setup");

//filter hook

function custom_excerpt_length(){
    return 15;
}

add_filter("excerpt_length","custom_excerpt_length");


//adding css and js files using action hooks
function add_theme_scripts(){
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

    
    wp_enqueue_style('magic', get_template_directory_uri().'/css/magin.css' );

    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
}

add_action('wp_enqueue_scripts','add_theme_scripts');
?>