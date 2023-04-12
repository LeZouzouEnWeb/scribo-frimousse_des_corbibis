<?php
function wpsfdc_register_assets()
{

    wp_enqueue_style('wpsfdc_ol', WPSFDC_R_DIR_CSS . '/main.css', array(), WPSFDC_VERSION);
    wp_enqueue_script('wpsfdc', WPSFDC_R_DIR_JS . '/script.js', array('jquery', 'jquery-ui-tooltip'), WPSFDC_VERSION, true);
}

function wpsfdc_maintenance_message()
{
    if (current_user_can('edit_posts')) {
        return;
    }

    wp_die('<h1>Stay Pawsitive!</h1><br>Sorry, we\'re temporarily down for maintenance right meow.');
}

// remove specific dashboard menus for non-admin users

function hide_admin_menus()
{
    // if (current_user_can( 'create_users' )) return;
    // if (wp_get_current_user()->display_name == "Salman") return;
    // remove_menu_page( 'plugins.php' );
    // remove_menu_page( 'themes.php' );
    // remove_menu_page( 'tools.php' );
    // remove_menu_page( 'users.php' );
    // remove_menu_page( 'edit.php?post_type=page' );
    // remove_menu_page( 'options-general.php' );
}

// **************************************************************
// PAGE DE CONNEXION
function wpsfdc_custom_login_message($message)
{
    if (empty($message)) {
        return ""; //"<h2>Connexion</h2>";
    } else {
        return $message;
    }
}

function wpsfdc_login_stylesheet()
{
    // Load the style sheet from the plugin folder

    wp_enqueue_style('wpsfdc_ol', WPSFDC_R_DIR_CSS . '/main.css', array(), WPSFDC_VERSION);
    wp_enqueue_style('wpsfdc_log', WPSFDC_R_DIR_CSS . '/main_login.css', array(), WPSFDC_VERSION);

    wp_enqueue_script('wpsfdc', WPSFDC_R_DIR_JS . '/script.js', array('jquery', 'jquery-ui-tooltip'), WPSFDC_VERSION, true);

}

function wpsfdc_remove_login_errors()
{
    return 'Informations d\'identification erronées. Veuillez réessayer !';
}

function wpsfdc_remove_login_error_shake()
{
    remove_action('login_head', 'wp_shake_js', 12);
}

function wpsfdc_login_headerurl($url)
{
    $url = site_url() . '/';
    return $url;
}

function wpsfdc_login_headertext($text)
{
    $text = 'Les Frimousses des Corbisiers';
    return $text;
}

// OUVRE UNE PAGE DE CONNEXION EN MODAL
function wpsfdc_login_modal_stylesheet()
{
    wp_enqueue_style(
        'w3schools',
        'https://www.w3schools.com/w3css/4/w3.css',
        array(),
        WPSFDC_VERSION
    );

    wp_enqueue_style(
        'wpsfdc_login_main',
        WPSFDC_R_DIR_CSS . '/main_login.css',
        array(),
        WPSFDC_VERSION
    );

    wp_enqueue_script(
        'wpsfdc_login_modal_script',
        WPSFDC_R_DIR_JS . '/script_login.js',
        ['jquery'],
        WPSFDC_VERSION,
        true
    );
}
