<?php

/*
#
#   ADD PRODUCTS CONTENT TYPE (CUSTOM POST TYPE)
#
*/

function strains_custom_init() {
  $labels = array(
    'name' => 'Strains',
    'singular_name' => 'Strain',
    'add_new' => 'Add Strain',
    'add_new_item' => 'Add New Strain',
    'edit_item' => 'Edit Strain',
    'new_item' => 'New Strain',
    'all_items' => 'All Strains',
    'view_item' => 'View Strain',
    'search_items' => 'Search Strains',
    'not_found' =>  'No Strains found',
    'not_found_in_trash' => 'No Strains found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Strains'
  );

  $args = array(
    'labels' => $labels,
    'description'   => 'Canna Delivery Strain',
    'menu_position' => 1,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'canna-delivery-strains' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category', 'post_tag')
  ); 

  register_post_type( 'strains', $args );
}
add_action( 'init', 'strains_custom_init' );



/*
#
#   REGISTER JS
#
*/

function lowermedia_scripts() {
    // wp_enqueue_script(
    //     'continent-map',
    //     get_stylesheet_directory_uri() . '/continentmap.js',
    //     array( 'jquery' )
    // );
    //     wp_enqueue_script(
    //     'map-data',
    //     get_stylesheet_directory_uri() . '/mapdata.js',
    //     array( 'jquery' )
    // );
}

add_action( 'wp_enqueue_scripts', 'lowermedia_scripts' );
