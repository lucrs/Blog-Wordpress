<?php
add_theme_support('title-tag');

// add theme support post and comment automatic feed links
add_theme_support('automatic-feed-links');

// enable support for post thumbnail or feature image on posts and pages
add_theme_support('post-thumbnails');

// allow the use of html5 markup
// @link https://codex.wordpress.org/Theme_Markup
add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

function myScripts(){

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
    wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7');
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.3.7', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.2.1', array(), '3.2.1', true);


}
add_action('wp_enqueue_scripts','myScripts');

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function mySideBar()
{
    register_sidebar(array(
        'name' => __('sidebar'),
        'id' => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));


}
add_action('widgets_init', 'mySideBar');