<?php
/**
 *  INDEX TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

<div class="portfolio-page">

    <h1 class="page-title"><span>welcome to my</span> <?php wp_title("", true); ?></h1>
    <hr id="hr1">

    <div class="line"></div>

    <div class="main-content-portfolio-page container">
        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '59' ); } ?>
    </div>

</div>

<?php get_footer(); ?>
