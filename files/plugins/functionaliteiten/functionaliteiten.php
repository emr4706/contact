<?php
   /*
   Plugin Name: Functionaliteiten
   Description: a plugin to create Functionaliteiten
   Version: 1.2
   License: GPL2
   */
add_theme_support( 'post-thumbnails' );
function functionaliteitenRegister() {
	$labels = array(
	    'name' => _x('Functionaliteiten', 'Algemene naam', 'siyou'),
	    'singular_name' => _x('Functionaliteit', 'Naam van Functionaliteit', 'siyou'),
	    'menu_name' => __( 'Functionaliteiten', 'siyou'),
	    'add_new' => _x('Voeg toe', 'siyou'),
	    'add_new_item' => __('Voeg Functionaliteit toe', 'siyou'),
	    'edit_item' => __('Pas Functionaliteit aan', 'siyou'),
	    'new_item' => __('Nieuwe Functionaliteit', 'siyou'),
	    'view_item' => __('Bekijk Functionaliteiten', 'siyou'),
	    'all_items' => __( 'Alle Functionaliteiten', 'siyou'),
	    'update_item'  => __( 'Update Functionaliteiten', 'siyou'),
	    'search_items' => __('Zoek Functionaliteiten', 'siyou'),
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
				'slug'       => 'functionaliteit'
	    ),
	    'has_archive' => true,
	    'show_in_nav_menus' => true,
	    'taxonomies'      => array('functionaliteiten','category')
	);

	register_post_type('functionaliteiten' , $args);
}

add_action('init', 'functionaliteitenRegister');
?>