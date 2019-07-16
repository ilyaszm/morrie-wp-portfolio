<?php
/**
 *  HEADER TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>
            <?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
        ?>
        <?php wp_head(); ?>
    </head>

    <body class="parallax" <?php body_class(); ?>>
    
        <header>
            <nav class="navbar">
                <?php
                wp_nav_menu( array(
                    'menu_class'        => 'primary-nav',
                    'container'         => false,
                    'theme_location'    => 'primary'
                ) );
                ?>
            </nav>
        </header>

