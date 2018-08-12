<?php
function product_module_registration() {

    $labels = array(
        'name' => _x('Product', 'Post Type General Name'),
        'singular_name' => _x('Product', 'Post Type Singular Name'),
        'menu_name' => __('Product'),
        'parent_item_colon' => __('Parent Project:'),
        'all_items' => __('All Products'),
        'view_item' => __('View Product'),
        'add_new_item' => __('Add New Product'),
        'add_new' => __('Add New'),
        'edit_item' => __('Edit Item'),
        'update_item' => __('Update Item'),
        'search_items' => __('Search Item'),
        'not_found' => __('Not found', 'ramsco_theme'),
        'not_found_in_trash' => __('Not found in Trash'),
    );
    $args = array(
        'label' => __('product'),
        'description' => __('Product Module'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 8,
        'menu_icon' => 'dashicons-products',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('product', $args);
}
add_action('init', 'product_module_registration', 0);
