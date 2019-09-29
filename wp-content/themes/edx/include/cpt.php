<?php
add_action('init', 'add_post_type');
function add_post_type()
{
    register_post_type('resources',
        array(
            'labels' => array(
                'name' => 'Resources',
                'singular_name' => 'Resource',
                'add_new' => 'Add Resource',
                'add_new_item' => 'Add Resource',
                'edit_item' => 'Edit',
                'new_item' => 'New',
                'all_items' => 'All',
                'view_item' => 'View',
                'search_items' => 'Search',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'No found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Resources'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            //'rewrite' => array('slug' => 'testimonials'),
            'has_archive' => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'capability_type' => 'page',
            'query_var' => true,
            'menu_icon' => 'dashicons-category',
        ));

    register_post_type('case-studies',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Studies',
                'add_new' => 'Add Case Studies',
                'add_new_item' => 'Add Case Studies',
                'edit_item' => 'Edit',
                'new_item' => 'New',
                'all_items' => 'All',
                'view_item' => 'View',
                'search_items' => 'Search',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'No found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Case Studies'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            //'rewrite' => array('slug' => 'testimonials'),
            'has_archive' => true,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'capability_type' => 'page',
            'query_var' => true,
            'menu_icon' => 'dashicons-clipboard',
        ));
    register_post_type('products-list',
        array(
            'labels' => array(
                'name' => 'Products List',
                'singular_name' => 'Product',
                'add_new' => 'Add Product',
                'add_new_item' => 'Add Product',
                'edit_item' => 'Edit',
                'new_item' => 'New',
                'all_items' => 'All',
                'view_item' => 'View',
                'search_items' => 'Search',
                'not_found' => 'Not found',
                'not_found_in_trash' => 'No found in Trash',
                'parent_item_colon' => '',
                'menu_name' => 'Products List'
            ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            //'rewrite' => array('slug' => 'testimonials'),
            'has_archive' => false,
            'hierarchical' => true,
            'show_in_nav_menus' => true,
            'capability_type' => 'page',
            'query_var' => true,
            'menu_icon' => 'dashicons-screenoptions',
        ));
}

