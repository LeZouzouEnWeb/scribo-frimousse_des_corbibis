<?php

/**
 * Plugin Name:       scribo-frimousse_des_corbibis
 * Plugin URI:        https://www.corbisier.fr/wordpress/plugins/scribo-frimousse_des_corbibis/
 * Description:       Un plugin pour paramtrage perso sur le site Frimousse des Corbibis.
 * Version:           1.0.43
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
define('WPSFDC_VERSION', '1.0.43');

// absolue :
$slash = (stristr(get_option("home"), "localhost") === false) ? '/' : '';
define('WPSFDC_DIR_FILE', __FILE__);
define('WPSFDC_DIR_BASENAME', plugin_basename(WPSFDC_DIR_FILE));
define('WPSFDC_DIR', $slash . trim(dirname(WPSFDC_DIR_FILE), '/'));
define('WPSFDC_DIR_PLUGIN', untrailingslashit(dirname(WPSFDC_DIR)));
define('WPSFDC_DIR_INC', WPSFDC_DIR . '/inc');
define('WPSFDC_DIR_INCL', WPSFDC_DIR_INC . '/includes');
define('WPSFDC_DIR_CSS', WPSFDC_DIR_INC . '/css');
define('WPSFDC_DIR_JS', WPSFDC_DIR_INC . '/js');
define('WPSFDC_DIR_ADMIN', WPSFDC_DIR . '/admin');

// relative :

define('WPSFDC_R_DIR', plugins_url('', __FILE__));
define('WPSFDC_R_DIR_INC', WPSFDC_R_DIR . '/inc');
define('WPSFDC_R_DIR_INCL', WPSFDC_R_DIR_INC . '/includes');
define('WPSFDC_R_DIR_CSS', WPSFDC_R_DIR_INC . '/css');
define('WPSFDC_R_DIR_JS', WPSFDC_R_DIR_INC . '/js');
define('WPSFDC_R_DIR_ADMIN', WPSFDC_R_DIR . '/admin');

// echo ABSPATH . "<p></p>";
// echo WPSFDC_DIR_FILE . "<p></p>";
// echo WPSFDC_R_DIR_CSS;
// exit;

require_once WPSFDC_DIR_INCL . '/hooks.php';
// require_once WPSFDC_DIR_INCL . '/functions.php';
require_once WPSFDC_DIR . '/load.php';
