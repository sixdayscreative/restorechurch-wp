<?php

/**
 * Register a custom post type called "gathering".
 *
 * @see get_post_type_labels() for label keys.
 */

function restoreproject_gathering_cpt_init() {

    /*
      Gathering Post type
    */
    $gathering_labels = array(
        'name'                  => _x( 'Gatherings', 'Post type general name', 'restoreproject' ),
        'singular_name'         => _x( 'Gathering', 'Post type singular name', 'restoreproject' ),
        'menu_name'             => _x( 'Gatherings', 'Admin Menu text', 'restoreproject' ),
        'name_admin_bar'        => _x( 'Gathering', 'Add New on Toolbar', 'restoreproject' ),
        'add_new'               => __( 'Add New', 'restoreproject' ),
        'add_new_item'          => __( 'Add New Gathering', 'restoreproject' ),
        'new_item'              => __( 'New Gathering', 'restoreproject' ),
        'edit_item'             => __( 'Edit Gathering', 'restoreproject' ),
        'view_item'             => __( 'View Gathering', 'restoreproject' ),
        'all_items'             => __( 'All Gatherings', 'restoreproject' ),
        'search_items'          => __( 'Search Gatherings', 'restoreproject' ),
        'parent_item_colon'     => __( 'Parent Gatherings:', 'restoreproject' ),
        'not_found'             => __( 'No projects found.', 'restoreproject' ),
        'not_found_in_trash'    => __( 'No projects found in Trash.', 'restoreproject' ),
        'featured_image'        => _x( 'Gathering Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'archives'              => _x( 'Gathering archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restoreproject' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restoreproject' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restoreproject' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restoreproject' ),
        'items_list_navigation' => _x( 'Gatherings list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restoreproject' ),
        'items_list'            => _x( 'Gatherings list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restoreproject' ),
    );

    $gathering_args = array(
        'labels'             => $gathering_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gatherings' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'rest_base'          => 'gatherings',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor' ),
    );

    register_post_type( 'gathering', $gathering_args );

}

add_action( 'init', 'restoreproject_gathering_cpt_init' );

/**
 * Flush rewrite rules on activation
 */

 function restoreproject_gathering_rewrite_flush() {
   restoreproject_gathering_cpt_init();
   flush_rewrite_rules();
 }
