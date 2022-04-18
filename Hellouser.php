<?php
/**
 * @package Hello User
 * @version 1.0.0
 */
/*
Plugin Name: Hello User
Plugin URI: https://github.com/MaimouniMohamedAmine/Simple-WP-Plugin
Description: This is a Hello User plugin
Author: Maimouni
Version: 1.0.0
Author URI: https://github.com/MaimouniMohamedAmine/Simple-WP-Plugin
*/
add_action('wp_head', 'say_hello');
//add_filter('default_content', 'contenu_par_default');
function say_hello(){
    echo '<b>Hello User!</b> <style> 
    b{
        font-size: 40px;
        margin-left: 48%;
    }
    
    </style>';
}

?>