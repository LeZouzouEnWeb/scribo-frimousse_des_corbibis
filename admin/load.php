<?php

define('WPSFDC_DIR_ADMIN_FILE', __FILE__);
define('WPSFDC_DIR_ADMIN_BASENAME', plugin_basename(WPSFDC_DIR_ADMIN_FILE));
define('WPSFDC_DIR_ADMIN_INC', WPSFDC_DIR_ADMIN . 'inc/');
define('WPSFDC_DIR_ADMIN_CSS', WPSFDC_DIR_ADMIN . 'assets/css/');
define('WPSFDC_DIR_ADMIN_JS', WPSFDC_DIR_ADMIN . 'assets/js/');

// relative :
define('WPSFDC_R_ADMIN_INC', WPSFDC_R_ADMIN . '/inc');
define('WPSFDC_R_ADMIN_CSS', WPSFDC_R_ADMIN . '/assets/css/');
define('WPSFDC_R_ADMIN_JS', WPSFDC_R_ADMIN . '/assets/js/');

// add_action('admin_menu', 'wpsfdc_register_assets', 10, 1);
// add_action('admin_menu', 'wpsfdc_hide_admin_menus');