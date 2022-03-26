<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 999);
function theme_enqueue_styles()
{
    $child_js_path = get_stylesheet_directory() . '/dist/js/script.js'; //Abs path to file, needed by filemtime()
    $themecsspath = get_stylesheet_directory() . '/dist/css/style.css';
    $the_theme = wp_get_theme();
    //CSS
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get('Version'));
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), filemtime($themecsspath));
    //JS
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array(), null, true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/dist/js/script.js', array('jquery'), filemtime($child_js_path), true);
}
