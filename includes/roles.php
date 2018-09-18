<?php

/**
* Register Host Role
*/

function restoreproject_register_role() {
  add_role('venue_host', 'Host');
}

/**
* Remove Host Role
*/

function restoreproject_remove_role() {
  remove_role('venue_host', 'Host');
}

/**
* Grant Host-level capabilities to Admin, Editor and Host
*/

function restoreproject_add_capabilities() {

  $roles = array( 'administrator', 'editor', 'venue_host' );

  foreach( $roles as $the_role ){
    $role = get_role( $the_role );
    $role->add_cap( 'read' );
    $role->add_cap( 'edit_homes' );
    $role->add_cap( 'publish_homes' );
    $role->add_cap( 'edit_published_homes' );
  }

  $manager_roles = array( 'administrator', 'editor' );

  foreach( $manager_roles as $the_role ){
    $role = get_role( $the_role );
    $role->add_cap( 'read_private_homes' );
    $role->add_cap( 'edit_others_homes' );
    $role->add_cap( 'edit_private_homes' );
    $role->add_cap( 'delete_homes' );
    $role->add_cap( 'delete_published_homes' );
    $role->add_cap( 'delete_private_homes' );
    $role->add_cap( 'delete_others_homes' );
  }

}

function restoreproject_remove_capabilities() {

  $manager_roles = array( 'administrator', 'editor' );

  foreach( $manager_roles as $the_role ){
    $role = get_role( $the_role );
    $role->remove_cap( 'read' );
    $role->remove_cap( 'edit_homes' );
    $role->remove_cap( 'publish_homes' );
    $role->remove_cap( 'edit_published_homes' );
    $role->remove_cap( 'read_private_homes' );
    $role->remove_cap( 'edit_others_homes' );
    $role->remove_cap( 'edit_private_homes' );
    $role->remove_cap( 'delete_homes' );
    $role->remove_cap( 'delete_published_homes' );
    $role->remove_cap( 'delete_private_homes' );
    $role->remove_cap( 'delete_others_homes' );
  }

}
