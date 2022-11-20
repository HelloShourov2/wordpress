<?php
function wl_css_js_file_calling(){

    // CSS
    wp_enqueue_style( 'wl-style', get_stylesheet_uri());
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style( 'bxslider', get_template_directory_uri().'/css/bxslider.min.css', array(), '4.2.12', 'all');
    wp_register_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_register_style( 'owl.theme.default.min', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_register_style( 'slicknav', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.1', 'all');
    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style( 'responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap');
    wp_enqueue_style( 'bxslider');
    wp_enqueue_style( 'owl.carousel.min');
    wp_enqueue_style( 'owl.theme.default.min');
    wp_enqueue_style( 'slicknav');
    wp_enqueue_style( 'custom');
    wp_enqueue_style( 'responsive');

    // Js
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
    wp_enqueue_script( 'bxslider', get_template_directory_uri().'/js/bxslider.min.js', array(), '4.2.12', 'true' );
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '2.3.4', 'true' );
    wp_enqueue_script( 'slicknav', get_template_directory_uri().'/js/slicknav.js', array(), '1.0.1', 'true' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );

}
add_action('wp_enqueue_scripts', 'wl_css_js_file_calling');


// google fonts

function wl_add_google_fonts(){
    wp_enqueue_style('wl_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&family=Oswald:wght@300;400;500;600;700&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'wl_add_google_fonts' );

// Dashicons loading issue
function dashicons_loading_issue(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'dashicons_loading_issue');