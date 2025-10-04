<?php
function lucastheme_setup()
{
    // Support titre automatique
    add_theme_support('title-tag');

    // Images à la une
    add_theme_support('post-thumbnails');

    // HTML5 moderne
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);

    // Menus
    register_nav_menus([
        'primary' => __('Menu principal', 'lucastheme'),
        'footer' => __('Menu pied de page', 'lucastheme'),
    ]);
}
add_action('after_setup_theme', 'lucastheme_setup');

// Charger styles et scripts
function lucastheme_enqueue_assets()
{
    wp_enqueue_style('lucastheme-style', get_template_directory_uri() . '/main.css', [], wp_get_theme()->get('Version'));

    wp_enqueue_style(
        'lucastheme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        false
    );

    wp_enqueue_script(
        'lucastheme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lucastheme_enqueue_assets');

// Zone de widgets
function lucastheme_widgets_init()
{
    register_sidebar([
        'name' => __('Sidebar', 'lucastheme'),
        'id' => 'sidebar-1',
        'before_widget' => '<section class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}
add_action('widgets_init', 'lucastheme_widgets_init');