<?php
/**
 * Plugin Name: Disallow File Edit
 * Plugin URI: https://github.com/TibetOS/disallow-file-edit-wordpress
 * Description: Disables the file editor and file modifications in WordPress admin for enhanced security.
 * Version: 1.0.0
 * Author: TibetOS
 * Author URI: https://github.com/TibetOS
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: disallow-file-edit
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Disable file editing and modifications in WordPress admin.
 * 
 * This function defines two constants that enhance WordPress security:
 * - DISALLOW_FILE_EDIT: Disables the plugin and theme file editor in admin
 * - DISALLOW_FILE_MODS: Disables all file modifications including plugin/theme installation and updates
 */
function disallow_file_edit_init() {
	// Disable the plugin and theme file editor
	if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
		define( 'DISALLOW_FILE_EDIT', true );
	}
	
	// Disable all file modifications (plugin/theme installation, updates, etc.)
	if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
		define( 'DISALLOW_FILE_MODS', true );
	}
}
add_action( 'init', 'disallow_file_edit_init' );
