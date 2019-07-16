<?php

/**
 *  @package portfoliothemes
 * 
 *  THEME FEATURES SUPPORT
 */

//  NAVIGATION MENU
function morrie_navigation_menus()
{
    register_nav_menus(
        array(
            'primary'   => __('Primary Menu')
        )
    );
}
add_action( 'init', 'morrie_navigation_menus' );

//  FEATURED IMAGE
add_theme_support('post-thumbnails');

//  POST FORMAT FEATURES
$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format) {
    $output[] = (@$options[$format] == 1 ? $format : '');
}

//  POST FORMATS FOR CUSTOM POST TYPES
function morrie_custom_post_formats() {
    //add_post_type_support( 'page', 'post-formats' );
    add_post_type_support( 'portfolio', 'post-formats' );
}
add_action( 'init', 'morrie_custom_post_formats' );

if (!empty($options)) {
    add_theme_support('post-formats', $output);
}

//  CUSTOM HEADER FEATURE
$header = get_option('custom_header');
if (@$header == 1) {
    add_theme_support('custom-header');
}

//  CUSTOM BACKGROUND FEATURE
$background = get_option('custom_background');
if (@$background == 1) {
    add_theme_support('custom-background');
}