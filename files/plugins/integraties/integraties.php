<?php
/*
Plugin Name: Integraties
Description: a plugin to create Integraties
Version: 1.2
License: GPL2
*/
add_theme_support( 'post-thumbnails' );
function integratiesRegister() {
    $labels = array(
        'name' => _x('Integraties', 'Algemene naam', 'siyou'),
        'singular_name' => _x('Integraties', 'Naam van Integraties', 'siyou'),
        'menu_name' => __( 'Integraties', 'siyou'),
        'add_new' => _x('Voeg toe', 'siyou'),
        'add_new_item' => __('Voeg Integraties toe', 'siyou'),
        'edit_item' => __('Pas Integraties aan', 'siyou'),
        'new_item' => __('Nieuwe Integraties', 'siyou'),
        'view_item' => __('Bekijk Integraties', 'siyou'),
        'all_items' => __( 'Alle Integraties', 'siyou'),
        'update_item'  => __( 'Update Integraties', 'siyou'),
        'search_items' => __('Zoek Integraties', 'siyou'),
        'not_found' => __('Niets gevonden', 'siyou'),
        'not_found_in_trash' => __('Niets gevonden in de afvalbak', 'siyou'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 30,
        'supports' => array('page-attributes','title', 'editor', 'excerpt', 'custom-fields', 'thumbnail', 'revisions'),
        'menu_icon'   => 'dashicons-forms',
        'rewrite' => array(
            'with_front' => true,
            'slug'       => 'integraties'
        ),
        'has_archive' => true,
        'show_in_nav_menus' => true,
        'taxonomies'      => array('integraties','category')
    );

    register_post_type('integraties' , $args);
}

add_action('init', 'integratiesRegister');
?>