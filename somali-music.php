<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              masuul.com
 * @since             1.0.0
 * @package           Somali_Music
 *
 * @wordpress-plugin
 * Plugin Name:       Somali music
 * Plugin URI:        wordpress.org/plugins/somali-music
 * Description:       Its adds your website Somali musics with nice player you will get hottest new somali from masuul.com  and you don't need to add any music .
 * Version:           1.2.0
 * Author:            Mohamed Maalmo
 * Author URI:        masuul.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       somali-music
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-somali-music-activator.php
 */
function activate_somali_music() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-somali-music-activator.php';
	Somali_Music_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-somali-music-deactivator.php
 */
function deactivate_somali_music() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-somali-music-deactivator.php';
	Somali_Music_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_somali_music' );
register_deactivation_hook( __FILE__, 'deactivate_somali_music' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-somali-music.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_somali_music() {

	$plugin = new Somali_Music();
	$plugin->run();

}
run_somali_music();
