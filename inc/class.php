<?php
namespace WPSFDC\scribo_frimousse_des_corbibis;

class Plugin
{
    private $wsfdc_setting;
    use singleton;

    protected function init()
    {

        $this->wsfdc_setting = [
            'login_gestion' => false,
            'maintenance' => false,
        ];
        add_action('init', array($this, 'redirect_login_page'));

        if (is_admin()) {
            add_action('admin_menu', array($this, 'register_assets_admin'), 10, 1);
            // add_action('admin_menu', 'wpsfdc_hide_admin_menus');

            // require_once WPSFDC_DIR_ADMIN . '/admin.php';
        } else {
            add_action('wp_enqueue_scripts', array($this, 'register_assets'), 1, 1);
            add_action('get_header', array($this, 'maintenance_message'));

            // require_once WPSFDC_DIR_INCL . '/pages.php';
        }

    }

    public function register_assets()
    {
        wp_enqueue_style('wpsfdc', WPSFDC_R_CSS . 'style.min.css', array(), WPSFDC_VERSION);
        wp_enqueue_script('wpsfdc', WPSFDC_R_JS . 'script.min.js', array('jquery', 'jquery-ui-tooltip'), WPSFDC_VERSION, true);
    }
    public function register_assets_admin()
    {
        wp_enqueue_style('wpsfdc_admin', WPSFDC_R_ADMIN_CSS . '/style.min.css', array(), WPSFDC_VERSION);
        wp_enqueue_script('wpsfdc_admin', WPSFDC_R_ADMIN_JS . '/script.min.js', array('jquery', 'jquery-ui-tooltip'), WPSFDC_VERSION, true);
    }

    public function maintenance_message()
    {

        if (($this->wsfdc_setting['maintenance']) && !current_user_can('edit_posts') && (!is_user_logged_in() || !is_user_logged_in())) {

            wp_die(printf('<h1>%s</h1><br/>%s',
                __('Stay Pawsitive!', 'scribo-fdc'),
                __('Sorry, we\'re temporarily down for maintenance right meow.', 'scribo-fdc'),

            ));
        }
    }

    public function redirect_login_page()
    {
        $url_log = wp_login_url();
        $url_log = basename(parse_url($url_log, PHP_URL_PATH));

        $login_url = home_url('/?login=open');
        $url = basename($_SERVER['REQUEST_URI']);
        $url_login = (stristr($_SERVER['REQUEST_URI'], $url_log)) ? true : false;

        // get requested URL
        isset($_REQUEST['redirect_to']) ? ($url = $url_log) : 0; // if users ssend request to wp-admin
        if ($url_login && $url_log == $url && 'GET' == $_SERVER['REQUEST_METHOD']) {
            wp_redirect($login_url);
            exit;
        }

        $login_url = home_url('/?login=lostpassword');
        isset($_REQUEST['redirect_to']) ? ($url = "?action=lostpassword") : 0; // if users ssend request to wp-admin
        if ($url_login && "?action=lostpassword" == $url && 'GET' == $_SERVER['REQUEST_METHOD']) {
            wp_redirect($login_url);
            exit;
        }

        $login_url = home_url('/?login=register');
        isset($_REQUEST['redirect_to']) ? ($url = "?action=register") : 0; // if users ssend request to wp-admin
        if ($url_login && "?action=register" == $url && 'GET' == $_SERVER['REQUEST_METHOD']) {
            wp_redirect($login_url);
            exit;
        }

        $login_url = home_url('/');
        if ($url_login && stristr($url, '?') && stristr($url, '?action=logout') === false) {
            wp_redirect($login_url);
            exit;
        }

    }

}