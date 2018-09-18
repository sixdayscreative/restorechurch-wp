<?php

/**
 * Register a custom post type for gathering venues.
 *
 * @see get_post_type_labels() for label keys.
 */

function restoreproject_venue_cpt_init() {

    $venue_labels = array(
        'name'                  => _x( 'Venues', 'Post type general name', 'restoreproject' ),
        'singular_name'         => _x( 'Venue', 'Post type singular name', 'restoreproject' ),
        'menu_name'             => _x( 'Venues', 'Admin Menu text', 'restoreproject' ),
        'name_admin_bar'        => _x( 'Venue', 'Add New on Toolbar', 'restoreproject' ),
        'add_new'               => __( 'Add New', 'restoreproject' ),
        'add_new_item'          => __( 'Add New Venue', 'restoreproject' ),
        'new_item'              => __( 'New Venue', 'restoreproject' ),
        'edit_item'             => __( 'Edit Venue', 'restoreproject' ),
        'view_item'             => __( 'View Venue', 'restoreproject' ),
        'all_items'             => __( 'All Venues', 'restoreproject' ),
        'search_items'          => __( 'Search Venues', 'restoreproject' ),
        'parent_item_colon'     => __( 'Parent Venues:', 'restoreproject' ),
        'not_found'             => __( 'No home found.', 'restoreproject' ),
        'not_found_in_trash'    => __( 'No homes found in Trash.', 'restoreproject' ),
        'featured_image'        => _x( 'Venue Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restoreproject' ),
        'archives'              => _x( 'Venue archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restoreproject' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restoreproject' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restoreproject' ),
        'filter_items_list'     => _x( 'Filter projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restoreproject' ),
        'items_list_navigation' => _x( 'Venues list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restoreproject' ),
        'items_list'            => _x( 'Venues list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restoreproject' ),
    );

    $venue_args = array(
        'labels'             => $venue_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gathering_venue' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'show_in_rest'       => true,
        'rest_base'          => 'gathering_venues',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'gathering_venue', $venue_args );

}

add_action( 'init', 'restoreproject_venue_cpt_init' );

/**
 * Flush rewrite rules on activation
 */

 function restoreproject_venue_rewrite_flush() {
   restoreproject_venue_cpt_init();
   flush_rewrite_rules();
 }
