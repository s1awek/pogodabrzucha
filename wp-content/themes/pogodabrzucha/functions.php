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

// Our custom post type function
function create_posttype()
{

    register_post_type(
        'diety',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Diety'),
                'singular_name' => __('Dieta')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'diety'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Diety', 'Post Type General Name', 'pogoda-brzucha'),
        'singular_name'       => _x('Movie', 'Post Type Singular Name', 'pogoda-brzucha'),
        'menu_name'           => __('Diety', 'pogoda-brzucha'),
        'parent_item_colon'   => __('Parent Movie', 'pogoda-brzucha'),
        'all_items'           => __('All Diety', 'pogoda-brzucha'),
        'view_item'           => __('View Dieta', 'pogoda-brzucha'),
        'add_new_item'        => __('Add New Dieta', 'pogoda-brzucha'),
        'add_new'             => __('Add New', 'pogoda-brzucha'),
        'edit_item'           => __('Edit Dieta', 'pogoda-brzucha'),
        'update_item'         => __('Update Dieta', 'pogoda-brzucha'),
        'search_items'        => __('Search Dieta', 'pogoda-brzucha'),
        'not_found'           => __('Not Found', 'pogoda-brzucha'),
        'not_found_in_trash'  => __('Not found in Trash', 'pogoda-brzucha'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('diety', 'pogoda-brzucha'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('diety', $args);
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action('init', 'custom_post_type', 0);

add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{
    // loop
    foreach ($items as &$item) {
        // vars
        $icon = get_field('icon_menu', $item);
        // append icon
        if ($icon) {
            $item->title .= ' <img src="' . $icon['url'] . '">';
        }
    }
    // return
    return $items;
}
