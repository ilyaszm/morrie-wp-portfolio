<?php
/**
 *  @package portfoliothemes
 * 
 *  PORTFOLIO CUSTOM POST TYPE
 */


$portfolio = get_option( 'activate_portfolio' );
if( @$portfolio == 1 )
{
	add_action( 'init', 'morrie_portfolio_cpt' );
}

function morrie_portfolio_cpt()
{
    register_post_type( 'portfolio',
    array(
        'labels'        => array(
            'name'  => __('Portfolio')
		),
		'show_ui'		=> true,
		'show_in_menu'	=> true,
        'public'        => true,
        'hierarchical'  => true,
		'has_archive'   => true,
		'menu_icon'		=> 'dashicons-format-gallery',
        'supports'      => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'comments'
        ),
        'taxonomies'    => array(
            'post_tag',
            'category'
        )
    ) );

    register_taxonomy_for_object_type( 'category', 'portfolio' );
    register_taxonomy_for_object_type( 'post_tag', 'portfolio' );

}