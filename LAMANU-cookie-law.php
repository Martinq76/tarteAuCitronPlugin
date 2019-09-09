<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://localhost::8888/wordpress/
Description: Plugin wordpress Tarte au citron.
Author: Martin76
Author URI: http://localhost::8888/wordpress/
*/ 
add_action('admin_menu', 'add_menu_config');
add_action('admin_init', 'register_settings');
add_action('wp_head', 'LAMANU_scripts');

    function LAMANU_scripts() {
       echo '<script type="text/javascript" src="' .plugin_dir_url(__FILE__).'js/tarteaucitron/tarteaucitron.js-1.2 2/tarteaucitron.js"></script>
        <script type="text/javascript">
       tarteaucitron.init({

      "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */

      "orientation": "bottom", /* Banner position (top - bottom) */
      "showAlertSmall": true, /* Show the small banner on bottom right */
      "cookieslist": true, /* Show the cookie list */

      "adblocker": true, /* Show a Warning if an adblocker is detected */
      "highPrivacy": false, /* Disable auto consent */

      "removeCredit": false, /* Remove credit link */
                      
    });
    tarteaucitron.user.analyticsUa = \'' . get_option('google_analytics', 'UA-00000000-0') . '\';
        tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */

            
    </script>
    <script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/googleAnalytics.js"></script>';
}

function add_menu_config() {
    add_menu_page('Page de configuration du plugin de gestion des cookies', 'Gestion des cookies', 'manage_options', 'Configuration', 'LAMANU_admin_menu_page');
}

function register_settings() {
    register_setting('LAMANU_GoogleAnalytics', 'google_analytics');
}

function LAMANU_admin_menu_page() {
    require_once(plugin_dir_path(__FILE__).'view/option.php');
}