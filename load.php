<?php
// require_once WPSFDC_DIR_INC . '/functions.php';

register_activation_hook(__FILE__, array('\WPSFDC\scribo_frimousse_des_corbibis\Plugin', 'activate'));
if (is_admin()) {
    require_once WPSFDC_DIR_ADMIN . 'admin.php';
}

require_once WPSFDC_URI . 'inc/singleton.php';
require_once WPSFDC_URI . 'inc/class.php';

add_action('plugins_loaded', 'plugins_loaded_wsfdc_plugin');
function plugins_loaded_wsfdc_plugin()
{
    $wsdc_var = \WPSFDC\scribo_frimousse_des_corbibis\Plugin::get_instance();
    load_plugin_textdomain('scribo-frimousse_des_corbibis', false, WPSFDC_URI . 'languages');
}