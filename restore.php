<?php
/*
Plugin Name: Restore Project Plugin
Plugin URI:  https://developer.wordpress.org/
Description: Add custom functionality to the restore project website
Version:     20160911
Author:      Houston Blyden
Author URI:  http://houbly.me
Text Domain: restoreproject
Domain Path: /languages
License:     GPL3

Restore Project Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Restore Project Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Restore Project Plugin. If not, see https://www.gnu.org/licenses/gpl-3.0.en.html.
*/

/*
Register custom post types
*/
require_once plugin_dir_path(__FILE__) . 'includes/gathering_posttype.php';
require_once plugin_dir_path(__FILE__) . 'includes/home_posttype.php';
require_once plugin_dir_path(__FILE__) . 'includes/venue_posttype.php';
register_activation_hook(__FILE__, 'restoreproject_gathering_rewrite_flush');
register_activation_hook(__FILE__, 'restoreproject_home_rewrite_flush');
register_activation_hook(__FILE__, 'restoreproject_venue_rewrite_flush');

/*
Register Venue Host Role
*/
require_once plugin_dir_path(__FILE__) . 'includes/roles.php';
register_activation_hook(__FILE__, 'restoreproject_register_role');
register_deactivation_hook(__FILE__, 'restoreproject_remove_role');

/*
Add capabilities
*/
register_activation_hook(__FILE__, 'restoreproject_add_capabilities');
register_deactivation_hook(__FILE__, 'restoreproject_remove_capabilities');

/*
Add CMB2 for custom fields
*/

require_once plugin_dir_path(__FILE__) . 'includes/CMB2-functions.php';
