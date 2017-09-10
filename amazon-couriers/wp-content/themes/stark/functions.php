<?php
/**
 * Created by PhpStorm.
 * User: developeter
 * Date: 18/06/17
 * Time: 16:13
 */

// Add scripts and stylesheets
function pluto_scripts() {
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_register_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('fontAwesome');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
}

add_action( 'wp_enqueue_scripts', 'pluto_scripts' );

add_theme_support('title-tag');