<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));  
}







function ajouter_lien_admin_au_menu($items, $args) {
    if (is_user_logged_in() && current_user_can('administrator')) {
        $admin_link = new stdClass();
        $admin_link->title = 'Admin';
        $admin_link->url = admin_url();
        

        // Position du lien "Admin"
        array_splice($items, 1, 0, array($admin_link));
    }
    return $items;
}

add_filter('wp_nav_menu_objects', 'ajouter_lien_admin_au_menu', 10, 2);