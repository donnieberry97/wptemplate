<?php

function customstyles_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('customstyle2', get_template_directory_uri() . '/aos.css');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('customjs2', get_template_directory_uri() . '/aos.js');
}

add_action('wp_enqueue_scripts', 'customstyles_script_enqueue');

function menusetup_script_enqueue() {
    add_theme_support('menus');
    

    
    register_nav_menus( array(
	'main_nav' => 'Main Navigation',
	'footer_nav' => 'My Custom Footer Menu',
) );
    
}

add_action('init', 'menusetup_script_enqueue');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'news-post', 500, 500, true );


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');

?>

