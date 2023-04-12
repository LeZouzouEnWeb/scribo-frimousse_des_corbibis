<?php

function wpsfdc_load_plugin()
{
    // require_once WPSFDC_DIR_INCL . '/functions.php';
    add_action('admin_menu', 'hide_admin_menus');
    if (is_admin()) {
        add_action('admin_menu', 'wpsfdc_register_assets', 10, 1);
        require_once WPSFDC_DIR_ADMIN . '/admin.php';
    } else {
        add_action('wp_enqueue_scripts', 'wpsfdc_register_assets', 1, 1);
        require_once WPSFDC_DIR_INCL . '/hooks.php';
        // require_once WPSFDC_DIR_INCL . '/pages.php';
    }

    //

    // define( 'WP_DEBUG', true ); // tracks PHP Warnings and Notices
    // define( 'SAVEQUERIES', true ); // tracks and displays MySQL queries

    // MESSAGE DE MAINTENANCE AUX VISITEUR
    // add_action( 'get_header', 'wpsfdc_maintenance_message' );

    // PERSONNALISATION DE LA PAGE LOGIN
    add_action('login_enqueue_scripts', 'wpsfdc_login_stylesheet');
    add_filter('login_errors', 'wpsfdc_remove_login_errors', 10);
    // Remove the login form box shake animation for incorrect credentials
    add_action('login_head', 'wpsfdc_remove_login_error_shake');
    // Change the logo and header link above the login form
    add_filter('login_headerurl', 'wpsfdc_login_headerurl');
    add_filter('login_headertext', 'wpsfdc_login_headertext');
    add_filter('login_message', 'wpsfdc_custom_login_message');

    // OUVRE UNE PAGE DE CONNEXION EN MODAL
    add_action('wp_enqueue_scripts', 'wpsfdc_login_modal_stylesheet');
}

add_action('plugins_loaded', __NAMESPACE__ . '\\wpsfdc_load_plugin');
