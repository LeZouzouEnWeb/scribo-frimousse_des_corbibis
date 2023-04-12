<?php

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
    wp_enqueue_style('wpsfdc_log', WPSFDC_R_DIR_CSS . '/main_login.css', array(), WPSFDC_VERSION);

}

function wpsfdc_remove_login_errors()
{
    return 'Informations d\'identification erronées. Veuillez réessayer !';
}

function wpsfdc_remove_login_error_shake()
{
    remove_action('login_head', 'wp_shake_js', 12);
}

/*
 * $url {string}
 */
function wpsfdc_login_headerurl($url = '')
{
    if (empty($url)) {
        $url = site_url() . '/';
    }

    return $url;
}

function wpsfdc_login_headertext($text = 'Les Frimousses des Corbibis')
{
    return $text;
}