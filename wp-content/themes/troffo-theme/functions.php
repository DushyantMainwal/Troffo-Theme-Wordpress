<?php
/**
 * Created by PhpStorm.
 * User: Dushyant Mainwal
 * Date: 25-Apr-18
 * Time: 4:52 PM
 */

function styleTest_resources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('main_js',
        get_template_directory_uri() . '/js/main.js',
        null, 1.0, true);
}

add_action('wp_enqueue_scripts', 'styleTest_resources');