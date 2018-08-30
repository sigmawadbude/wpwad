<?php
/*
   Plugin Name: WPWAF Forum
   Plugin URI : -
   Description: Forum Management application for WordPress Web Application Development 3rd Edition
   Version    : 1.0
   Author     : Rakhitha Nimesh
   Author URI: http://www.wpexpertdeveloper.com/
   License: GPLv2 or later
   Text Domain: wpwaf
 
 */
 
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if( !class_exists( 'WPWAF_Forum' ) ) {
    
    class WPWAF_Forum{
        private static $instance;

        public static function instance() {
            
            if ( ! isset( self::$instance ) && ! ( self::$instance instanceof WPWAF_Forum ) ) {
                self::$instance = new WPWAF_Forum();
                //self::$instance->setup_constants();

                //self::$instance->includes();
                
                //add_action( 'admin_enqueue_scripts',array(self::$instance,'load_admin_scripts'),9);
                //add_action( 'wp_enqueue_scripts',array(self::$instance,'load_scripts'),9);

                //self::$instance->config_manager  = new WPWAF_Config_Manager();
                //self::$instance->registration    = new WPWAF_Registration();
                //self::$instance->login           = new WPWAF_Login();

                //register_activation_hook( __FILE__, array( self::$instance->config_manager , 'activation_handler' ) );
                
            }
            return self::$instance;
        }    
    }
}



function WPWAF_Forum() {
    global $wpwaf;
    $wpwaf = WPWAF_Forum::instance();
}

WPWAF_Forum();
