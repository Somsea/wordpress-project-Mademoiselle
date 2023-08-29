<?php

// include js and css files

function mademoiselle_style() {
    wp_enqueue_style('Owl Carousel', get_template_directory_uri() . '/frontend/css/owl.carousel.css', array(), '2.3.4');
    wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri() . '/frontend/css/owl.theme.default.css', array('Owl Carousel'), '2.3.4');
    wp_enqueue_style('Theme', get_template_directory_uri() . '/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '5.15.3', true);
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri() . '/frontend/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('Main js', get_template_directory_uri() . '/frontend/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'mademoiselle_scripts');


function mademoiselle_support() {
    // title tag support
    add_theme_support('title-tag');

    //custom logo support

    add_theme_support('custom-logo', array(
        'height' => 274.4,
        'width' => 35,
        'flex-height' => false,
        'flex-width' => false
    ));

    // Featured Images & Post Thumbnails

    add_theme_support('post-thumbnails');

    // add image size

    add_image_size('blog-list', 368, 245, true);

    add_image_size('blog-image', 564, 446, true);
    add_image_size('team-image', 412, 384, true);
}

add_action('after_setup_theme', 'mademoiselle_support');

function mademoiselle_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'social' => 'Social'
    ));
}

add_action('init', 'mademoiselle_menus');

function mademoiselle_init_sidebar() {

    // prva widget zona (sidebar)
    register_sidebar(array(
        'id' => 'sidebar_1',
        'name' => __('Primary Sidebar'),
        'description' => __('Page Sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Druga widget zona (sidebar)

    register_sidebar(array(
        'id' => 'sidebar_2',
        'name' => __('Secondary Sidebar'),
        'description' => __('Another Sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'mademoiselle_init_sidebar');

require get_template_directory() . '/inc/widgets.php';

// CUSTOM POST TYPE 

function mademoiselle_create_post_type() {
    register_post_type('our-services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service Item',
            'edit_item' => 'Edit Service Item',
            'new_item' => 'New Service',
            'view_item' => 'View Item',
            'search_items' => 'Search Service Item',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in Trash',
        ),
        'public' => true,
        'hierarchical' => false,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'template'),
    ));
}

add_action('init', 'mademoiselle_create_post_type');


// custom post type za our-team

function create_our_team_post_type() {
    register_post_type('our-team', array(
        'labels' => array(
            'name' => __('Our Team'),
            'singular_name' => __('Team Member')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'create_our_team_post_type');

// include options from contact page 

require get_template_directory() . '/inc/options.php';

