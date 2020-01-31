<?php

function my_theme_enqueue_styles() {

    wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/script.js', array() , false, true );
    if(is_front_page()) {
    
       wp_enqueue_style( 'index_style', get_stylesheet_directory_uri() . '/home.css');
    } else {
        wp_enqueue_style( 'post-style', get_stylesheet_directory_uri() . '/content.css');
    }

  


    wp_enqueue_script( 'custom-script' );

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
