<?php

/**
 * Register a custom post type called "home".
 *
 * @see get_post_type_labels() for label keys.
 */

function restoreproject_home_cpt_init() {

    /*
      Homes Post type
    */
    $home_labels = array(
        'name'                  => _x( 'Homes', 'Post type general name', 'restoreproject' ),
        'singular_name'         => _x( 'Home', 'Post type singular name', 'restoreproject' ),
        'menu_name'             => _x( 'Homes', 'Admin Menu text', 'restoreproject' ),
        'name_admin_bar'        => _x( 'Home', 'Add New on Toolbar', 'restoreproject' ),
        'add_new'               => __( 'Add New', 'restoreproject' ),
        'add_new_item'          => __( 'Add New Home', 'restoreproject' ),
        'new_item'              => __( 'New Home', 'restoreproject' ),
        'edit_item'             => __( 'Edit Home', 'restoreproject' ),
        'view_item'             => __( 'View Home', 'restoreproject' ),
        'all_items'             => __( 'All Homes', 'restoreproject' ),
        'search_items'          => __( 'Search Homes', 'restoreproject' ),
        'parent_item_colon'     => __( 'Parent Homes:', 'restoreproject' ),
        'not_found'             => __( 'No projects found.', 'restoreproject' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'restoreproject' ),
        'featured_image'        => _x( 'Home Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'archives'              => _x( 'Home archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restoreproject' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restoreproject' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restoreproject' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restoreproject' ),
        'items_list_navigation' => _x( 'Homes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restoreproject' ),
        'items_list'            => _x( 'Homes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restoreproject' ),
    );

    $home_args = array(
        'labels'             => $home_labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'homes' ),
        'capability_type'    => 'home',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'rest_base'          => 'homes',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-multisite',
        //'supports'           => array( 'title' ),
        'map_meta_cap'       => true,
    );

    register_post_type( 'home', $home_args );


}

add_action( 'init', 'restoreproject_home_cpt_init' );

/**
 * Flush rewrite rules on activation
 */


 function restoreproject_home_rewrite_flush() {
   restoreproject_home_cpt_init();
   flush_rewrite_rules();
 }
