<?php
function composition_theme_support(){
    // Add dynamic title tag support
    add_theme_support( 'title-tag' );

    // Add custom logo
    add_theme_support('custom-logo');

    // add post thumbnails
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'composition_theme_support');

function composition_menu(){
    $location = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($location);
}

add_action('init', 'composition_menu');
// Integrating custom style , bootstrap, font-awesome
function composition_register_style(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('composition-style', get_template_directory_uri() . "/assets/css/style.css", array(), $verstion, "all");
    wp_enqueue_style('composition-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
add_action('wp_enqueue_scripts', 'composition_register_style');

// Integrating custom script 
// Bootstrap Javascript
function composition_register_script(){
    $version = wp_get_theme()->get( 'Version' );
   wp_enqueue_script('composition-main', get_template_directory_uri() . "/assets/js/main.js", array(),$version, true);
}
add_action('wp_enqueue_scripts', 'composition_register_script'); 

/* Custom Image size */
add_image_size( 'target-size', 1500, 1250, true );

/* Display Custom Image Size */
add_filter( 'image_size_name_choose','website_custom_image_size');
function website_custom_image_size( $sizes ){
    return array_merge( $sizes, array(
        'target-size'=> __(' 1500X1250 ')
    ));
}
?>