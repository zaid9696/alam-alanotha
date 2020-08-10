<?php 


function female_scripts(){

    // Font 
    wp_enqueue_style( "female_font",  '//fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap');
    // CSS Style
    // wp_enqueue_style( "female_style-2", get_theme_file_uri( '/css/owl.carousel.css' ) );
    // wp_enqueue_style( "female_style-2", get_theme_file_uri( '/css/owl.theme.default.css' ) );
    wp_enqueue_style( "female_style", get_theme_file_uri( '/css/style.css' ) );
    // JS 
    //  wp_enqueue_script( 'female_j', get_theme_file_uri( '/js/dist/owl.carousel.js' ), array('jquery'), '1.0', true);

    wp_enqueue_script( 'female_jq', get_theme_file_uri( '/js/src/jquery-3.4.1.min.js' ), null, '1.0', true);

    wp_enqueue_script( 'female_slide', get_theme_file_uri( '/js/src/owl.carousel.min.js' ), null, '1.0', true);
    // JS 
    wp_enqueue_script( 'female_js', get_theme_file_uri( 'js/dist/main.js' ), null, '1.0', true);
    // Sending Data to JS File
    wp_localize_script( 'female_js', 'femaleUri', array(
        'root_uri' => get_site_url(),
        'root_theme_uri' => get_theme_file_uri(),
    ) );



}


add_action('wp_enqueue_scripts', 'female_scripts');