<?php
/**
 *  ADMIN PAGE
 * 
 *  @package portfoliothemes
 */

function morrie_add_admin_page() {
	
	//Generate Admin Page
	add_menu_page( 'Morriee Theme Options', 'Morrie', 'manage_options', 'morrie_options', 'morrie_create_page', 'dashicons-admin-customizer', 110 );
    
    //Generate Admin Sub Pages
    add_submenu_page( 'morrie_options', 'Morrie General Options', 'General', 'manage_options', 'morrie_options', 'morrie_create_page' );
	add_submenu_page( 'morrie_options', 'Morrie Theme Options', 'Theme Options', 'manage_options', 'morrie_theme_support', 'morrie_theme_support_page' );
    add_submenu_page( 'morrie_options', 'Morrie Post Types Options', 'Post Types', 'manage_options', 'morrie_post_types', 'morrie_post_types_page' );
	
}
add_action( 'admin_menu', 'morrie_add_admin_page' );

// ACTIVATE CUSTOM SETTINGS
add_action( 'admin_init', 'morrie_custom_settings' );

function morrie_custom_settings()
{
    // GENERAL OPTIONS
    add_settings_section( 'morrie-general-options', 'General Settings', 'morrie_general_options', 'morrie_options' );

    add_settings_field( 'full-name', 'Full Name', 'morrie_full_name', 'morrie_options', 'morrie-general-options' );
    add_settings_field( 'twitter', 'Twitter Handler', 'morrie_twitter_handler', 'morrie_options', 'morrie-general-options' );
    add_settings_field( 'facebook', 'Facebook Handler', 'morrie_facebook_handler', 'morrie_options', 'morrie-general-options' );
    add_settings_field( 'instagram', 'Instagram Handler', 'morrie_instagram_handler', 'morrie_options', 'morrie-general-options' );

    register_setting( 'morrie-settings-group', 'first_name' );
    register_setting( 'morrie-settings-group', 'last_name' );
    register_setting( 'morrie-settings-group', 'twitter_handler', 'morrie_sanitize_twitter_handler' );
    register_setting( 'morrie-settings-group', 'facebook_handler' );
    register_setting( 'morrie-settings-group', 'instagram_handler', 'morrie_sanitize_instagram_handler' );

    // THEME SUPPORT OPTIONS
    add_settings_section( 'morrie-theme-support-options', 'Theme Supports', 'morrie_theme_support_options', 'morrie_theme_support' );
    
    add_settings_field( 'post-formats', 'Post Formats', 'morrie_post_formats', 'morrie_theme_support', 'morrie-theme-support-options' );
    add_settings_field( 'custom-header', 'Custom Header', 'morrie_custom_header', 'morrie_theme_support', 'morrie-theme-support-options' );
	add_settings_field( 'custom-background', 'Custom Background', 'morrie_custom_background', 'morrie_theme_support', 'morrie-theme-support-options' );

    register_setting( 'morrie-theme-support-group', 'post_formats' );
    register_setting( 'morrie-theme-support-group', 'custom_header' );
    register_setting( 'morrie-theme-support-group', 'custom_background' );
    
    // CUSTOM POST TYPE OPTIONS
    add_settings_section( 'morrie-portfolio-options', 'Post Types', 'morrie_portfolio_options', 'morrie_post_types');

    add_settings_field( 'activate-form', 'Activate Contact Form Post Type', 'morrie_contact', 'morrie_post_types', 'morrie-portfolio-options' );
    add_settings_field( 'activate-portfolio', 'Activate Portfolio Post Type', 'morrie_portfolio', 'morrie_post_types', 'morrie-portfolio-options' );

    register_setting( 'morrie-post-types-group', 'activate_contact' );
    register_setting( 'morrie-post-types-group', 'activate_portfolio' );

}

function morrie_general_options()
{
    echo 'Customize your informations';
}

function morrie_theme_support_options()
{
    echo 'Activate or deactivate specific theme support options';
}

function morrie_portfolio_options()
{
    echo 'Activate or deactivate specific custom post types';
}

// TEMPLATES CALLING FUNCTIONS
function morrie_create_page()
{
    require_once(get_template_directory() . '/inc/templates/morrie-admin.php');
}

function morrie_theme_support_page()
{
    require_once(get_template_directory() . '/inc/templates/morrie-theme-support.php');
}

function morrie_post_types_page()
{
    require_once(get_template_directory() . '/inc/templates/morrie-post-types.php');
}

// GENERAL OPTIONS FUNCTIONS
function morrie_full_name()
{
    $firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function morrie_twitter_handler()
{
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}

function morrie_facebook_handler()
{
    $facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" />';
}

function morrie_instagram_handler()
{
    $instagram = esc_attr( get_option( 'instagram_handler' ) );
	echo '<input type="text" name="instagram_handler" value="'.$instagram.'" placeholder="Instagram handler" />';
}

// SANITIZE FUNCTIONS
function morrie_sanitize_twitter_handler( $input )
{
    $output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

function morrie_sanitize_instagram_handler( $input )
{
    $output = sanitize_text_field( $input );
	$output = str_replace('@', '', $output);
	return $output;
}

// THEME SUPPORT OPTIONS FUNCTIONS
function morrie_post_formats()
{
    $options = get_option( 'post_formats' );
    $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
    $output = '';
	foreach ( $formats as $format ){
		$checked = ( @$options[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';
	}
	echo $output;
}

function morrie_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' /> Activate the Custom Header</label>';
}

function morrie_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate the Custom Background</label>';
}

// POST TYPES FUNCTIONS
function morrie_contact()
{
    $options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.' /></label>';
}

function morrie_portfolio()
{
    $options = get_option( 'activate_portfolio' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="activate_portfolio" name="activate_portfolio" value="1" '.$checked.' /></label>';
}