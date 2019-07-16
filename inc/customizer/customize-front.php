<?php
/**
 *  CUSTOMIZE FRONT PAGE
 * 
 *  @package portfoliothemes
 */
?>

<?php

function morrie_customize_front_register($wp_customize)
{
    $wp_customize -> add_section('home_page', array(
        'title'         => __('Home Page', 'morrie'),
        'description'   => sprintf(__('Options for home page','morrie')),
        'priority'      => 130
    ));

    //  HOME PAGE PROFILE IMAGE
    $wp_customize -> add_setting('profile_image', array(
        'default'       => get_bloginfo('template_directory').'/assets/images/profile.png',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
        'label'         => __('Profile Image', 'morrie'),
        'section'       => 'home_page',
        'settings'      => 'profile_image',
        'priority'      => 1
    )));

    //  HOME PAGE HEADING
    $wp_customize -> add_setting('home_page_heading', array(
        'default'       => _x('Web Developer', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('home_page_heading', array(
        'label'         => __('Heading', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 2
    ));

    //  HOME PAGE DESCRIPTION
    $wp_customize -> add_setting('home_page_text', array(
        'default'       => _x('Specializing in WordPress theme development.', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('home_page_text', array(
        'label'         => __('Text', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 3
    ));

    //  HOME PAGE QUOTE
    $wp_customize -> add_setting('quote_text', array(
        'default'       => _x('Live life to the fullest, ans focus on the positive. - Matt Cameron', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('quote_text', array(
        'label'         => __('Quote', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 4
    ));

    //  HOME PAGE BUTTON URL ViewWork
    $wp_customize -> add_setting('vw_btn_url', array(
        'default'       => _x('http://localhost/portfoliothemes/index.php/portfolio/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('vw_btn_url', array(
        'label'         => __('ViewWork Button URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 5
    ));

    //  HOME PAGE BUTTON TEXT ViewWork
    $wp_customize -> add_setting('vw_btn_text', array(
        'default'       => _x('See My Work', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('vw_btn_text', array(
        'label'         => __('ViewWork Button Text', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 5
    ));

    //  HOME PAGE BUTTON URL Contact
    $wp_customize -> add_setting('cm_btn_url', array(
        'default'       => _x('http://localhost/portfoliothemes/index.php/contact/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('cm_btn_url', array(
        'label'         => __('Contact Button URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 6
    ));

    //  HOME PAGE BUTTON TEXT Contact
    $wp_customize -> add_setting('cm_btn_text', array(
        'default'       => _x('Contact Me', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('cm_btn_text', array(
        'label'         => __('Contact Button Text', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 6
    ));

    //  HOME PAGE SOCIAL MEDIA ICONS URL
    //  TWITTER
    $wp_customize -> add_setting('tw_btn_url', array(
        'default'       => _x('https://twitter.com/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('tw_btn_url', array(
        'label'         => __('Twitter social media icon URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 7
    ));

    //  FACEBOOK
    $wp_customize -> add_setting('fb_btn_url', array(
        'default'       => _x('https://www.facebook.com/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('fb_btn_url', array(
        'label'         => __('Facebook social media icon URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 8
    ));

    //  BEHANCE
    $wp_customize -> add_setting('be_btn_url', array(
        'default'       => _x('https://www.behance.net/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('be_btn_url', array(
        'label'         => __('Behance social media icon URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 9
    ));

    //  DRIBBBLE
    $wp_customize -> add_setting('dr_btn_url', array(
        'default'       => _x('https://dribbble.com/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('dr_btn_url', array(
        'label'         => __('Dribbble social media icon URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 10
    ));

    //  YOUTUBE
    $wp_customize -> add_setting('yt_btn_url', array(
        'default'       => _x('https://www.youtube.com/', 'morrie'),
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control('yt_btn_url', array(
        'label'         => __('Youtube social media icon URL', 'morrie'),
        'section'       => 'home_page',
        'priority'      => 11
    ));

}
add_action('customize_register', 'morrie_customize_front_register');