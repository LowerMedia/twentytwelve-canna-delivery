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

function lowermedia_enqueue_parent_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'lowermedia_enqueue_parent_style' );

function lowermedia_enqueue_child_style() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lowermedia_enqueue_child_style', 11 );

/*
#
#   Make Archives.php Include Custom Post Types
#   http://css-tricks.com/snippets/wordpress/make-archives-php-include-custom-post-types/
#
*/

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'products'
        ));
      return $query;
    }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

// Define what post types to search
function searchAll( $query ) {
    if ( $query->is_search ) {
        $query->set( 'post_type', array( 'post', 'page', 'feed', 'products', 'people'));
    }
    return $query;
}

// The hook needed to search ALL content
add_filter( 'the_search_query', 'searchAll' );