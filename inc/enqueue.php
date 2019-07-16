<?php

/**
 *  @package portfoliothemes
 */


/**
 *  ========================
 *  ENQUEUE STYLES & SCRIPTS
 *  ========================
 */

function morrie_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Staatliches|Acme|Charm|Ubuntu|Source+Sans+Pro|Roboto+Condensed|Roboto|Thasadith|Source+Sans+Pro|ZCOOL+QingKe+HuangYou|Coiny');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array ( 'jquery' ), '3.3.1', true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
    
}
add_action( 'wp_enqueue_scripts', 'morrie_theme_scripts' );

