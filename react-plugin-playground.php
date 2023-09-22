<?php 

/**
 * Plugin Name: React Plugin Boilerplate
 * Description: React Plugin Boilerplate for building WordPress plugins with React, powered by Vite.
 * Plugin URI: 
 * Version: 1.0
 * Author: Coulter Peterson
 * Author URI: https://github.com/coulterpeterson
 * Text Domain: react-plugin-boilerplate
 */

/** --------------------------
 * Hooks
 *  -------------------------- */ 
add_action( 'wp_enqueue_scripts', 'rpb_add_plugin_scripts' );
add_shortcode('myReactApp', 'rpb_shortcode');

/** --------------------------
 * Functions
 *  -------------------------- */ 
function rpb_shortcode($atts) {
    // override default attributes with user attributes
    $redir_atts = shortcode_atts([
        "X" => "Y"
    ], $atts);

    return '<div id="myReactApp"></div>';
}

function rpb_add_plugin_scripts() {
    clearstatcache();
    
    wp_enqueue_style( 'rpb-style', plugins_url('/dist/assets/index.css', __FILE__), array(), filemtime( plugins_url('/dist/assets/index.css', __FILE__) ), 'all');
    wp_enqueue_script( 'rpb-script', plugins_url('/dist/assets/index.js', __FILE__), array (), filemtime( plugins_url('/dist/assets/index.js', __FILE__) ), true);
}
