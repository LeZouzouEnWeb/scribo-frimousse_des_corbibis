<?php

/**
 * Plugin Name:       scribo-frimousse_des_corbibis
 * Plugin URI:        https://www.corbisier.fr/wordpress/plugins/scribo-frimousse_des_corbibis/
 * Description:       Un plugin pour paramtrage perso sur le site Frimousse des Corbibis.
 * Version:           1.1.02
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            Eric CORBISIER
 * Author URI:        https://www.corbisier.fr/wordpress/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://www.corbisier.fr/wordpress/
 * Text Domain:       SG-pluging
 * Domain Path:       /lang
 */

defined('ABSPATH') or die();

define('WPSFDC_PLUGIN', 'scribo-frimousse_des_corbibis');
define('WPSFDC_VERSION', '1.1.02');

// absolue :
$slash = (stristr(get_option("home"), "localhost") === false) ? '/' : '';
define('WPSFDC_URI', plugin_dir_path(__FILE__));
define('WPSFDC_DIR_FILE', __FILE__);
define('WPSFDC_DIR_BASENAME', plugin_basename(WPSFDC_DIR_FILE));
define('WPSFDC_DIR', $slash . trim(dirname(WPSFDC_DIR_FILE), '/'));
define('WPSFDC_DIR_PLUGIN', untrailingslashit(dirname(WPSFDC_DIR)));
define('WPSFDC_DIR_INC', WPSFDC_URI . 'inc/');
define('WPSFDC_DIR_CSS', WPSFDC_URI . 'assets/css/');
define('WPSFDC_DIR_JS', WPSFDC_URI . 'assets/js/');
define('WPSFDC_DIR_ADMIN', WPSFDC_URI . 'admin/');

// relative :

define('WPSFDC_R', plugins_url('', __FILE__) . '/');
define('WPSFDC_R_INC', WPSFDC_R . 'inc/');
define('WPSFDC_R_CSS', WPSFDC_R . 'assets/css/');
define('WPSFDC_R_JS', WPSFDC_R . 'assets/js/');
define('WPSFDC_R_ADMIN', WPSFDC_R . 'admin/');

require_once WPSFDC_URI . 'load.php';