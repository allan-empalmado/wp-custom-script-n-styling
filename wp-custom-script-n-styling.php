<?php
/**
 * Plugin Name:       WP Custom Script &amp; Styling
 * Plugin URI:        https://github.com/allan-empalmado/wp-custom-script-n-styling
 * Description:       Add Custom Stylesheet/Javascript to your active theme
 * Author:            Allan Ramirez Empalmado
 * Version:           1.0.0
 * Author URI:        https://appdevph.com
 * GitHub Plugin URI: https://github.com/allan-empalmado/wp-custom-script-n-styling
 * License:           GNU General Public License v2
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

if( ! class_exists("WP_Custom_Script_N_Styling") ):
class WP_Custom_Script_N_Styling {
    
    public function __construct(){
        add_action('wp_enqueue_scripts', array( $this, 'wcsns_enqueue_scripts' ), 9999 );
    }

    function wcsns_enqueue_scripts(){
        wp_enqueue_style( 'wcsns-stylesheet', plugins_url( 'wcsns-stylesheet.css', __FILE__ ) );
        wp_enqueue_script( 'wcsns-script', plugins_url( 'wcsns-script.js', __FILE__ ), array("jquery"), '1.0.0', true  );
    }
    
}

new WP_Custom_Script_N_Styling();
endif;