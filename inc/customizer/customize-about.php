<?php
/**
 *  CUSTOMIZE ABOUT PAGE
 * 
 *  @package portfoliothemes
 */
?>

<?php

function morrie_customize_about_register($wp_customize)
{
    $wp_customize -> add_section('about_page', array(
        'title'         => __('About Page', 'morrie'),
        'description'   => sprintf(__('Options for about page','morrie')),
        'priority'      => 140
    ));

    //  PROFILE IMAGE 2
    $wp_customize -> add_setting('profile_image_2', array(
        'default'       => get_bloginfo('template_directory').'/assets/images/profile2.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
        'label'         => __('Profile Image 2', 'morrie'),
        'section'       => 'about_page',
        'settings'      => 'profile_image_2',
        'priority'      => 1
    )));

}
add_action('customize_register', 'morrie_customize_about_register');