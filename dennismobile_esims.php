<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             2.0.2
 * @package           dennismobile_esims
 *
 * @wordpress-plugin
 * Plugin Name:       DennisMobile eSim
 * Plugin URI:        https://dennismobile.com/
 * Description:       Get new sim.
 * Version:           2.0.3
 * Author:            Digitaaleon
 * Author URI:        https://digitaaleon.nl
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-woo-esim
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'dennismobile_esims_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dennismobile_esims-activator.php
 */
function activate_dennismobile_esims() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dennismobile_esims-activator.php';
	dennismobile_esims_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dennismobile_esims-deactivator.php
 */
function deactivate_dennismobile_esims() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dennismobile_esims-deactivator.php';
	dennismobile_esims_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dennismobile_esims' );
register_deactivation_hook( __FILE__, 'deactivate_dennismobile_esims' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dennismobile_esims.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dennismobile_esims() {

	$plugin = new dennismobile_esims();
	$plugin->run();

}
run_dennismobile_esims();
