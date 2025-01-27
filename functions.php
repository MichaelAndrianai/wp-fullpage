<?php

/**
 * Theme Functions.
 * 
 * @package Tmsc
 */

if (! defined('JS_PATH')) {
    define('JS_PATH', '/assets/js/');
}

if (! defined('PLUGINS_PATH')) {
    define('PLUGINS_PATH', '/assets/plugins/');
}

function tmsc_enqueue_scripts()
{
    // Register Styles.
    wp_register_style('tmsc-style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-style', get_template_directory_uri() . PLUGINS_PATH . 'bootstrap/css/bootstrap.min.css', [], false, 'all');
    wp_register_style('fullpage-style', get_template_directory_uri() . PLUGINS_PATH . 'fullpage/css/fullpage.min.css', [], false, 'all');
    
    // Register Scripts.
    wp_register_script('tmsc-script', get_template_directory_uri() . JS_PATH . 'main.js', [], filemtime(get_template_directory() . JS_PATH . 'main.js'), true);
    wp_register_script('bootstrap-script', get_template_directory_uri() . PLUGINS_PATH . 'bootstrap/js/bootstrap.min.js', ['jquery'], false, true);
    wp_register_script('fullpage-script', get_template_directory_uri() . PLUGINS_PATH . 'fullpage/js/fullpage.min.js', ['jquery'], false, true);

    // Enqueue Styles.
    wp_enqueue_style('tmsc-style');
    wp_enqueue_style('bootstrap-style');
    wp_enqueue_style('fullpage-style');

    // Enqueue Scripts.
    wp_enqueue_script('tmsc-script');
    wp_enqueue_script('bootstrap-script');
    wp_enqueue_script('fullpage-script');

}

add_action('wp_enqueue_scripts', 'tmsc_enqueue_scripts');
