<?php
// Integrating custom style , bootstrap, font-awesome
function composition_register_style(){
    $version = wp_get_theme()->get('Version');
    wp_equeue_style('composition-style', get_template_directory_uri() . '/assets/css/style.css', array('composition-bootstrap'), $verstion, "all");
    wp_equeue_style('composition-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_equeue_style('composition-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action('wp_enqueue_scripts', 'composition_register_style');

// Integrating custom script 
// Bootstrap Javascript
function composition_register_script(){
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('composition-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(),"3.4.1", true);
    wp_enqueue_script('composition-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(),"1.16.0", true);
    wp_enqueue_script('composition-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),"4.4.1", true);
    wp_enqueue_script('composition-main', get_template_directory_uri() . "/assets/js/main.js", array(),$version, true);
}
add_action('wp_enqueue_scripts', 'composition_register_script'); 
