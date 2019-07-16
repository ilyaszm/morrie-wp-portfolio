<?php
/**
 *  CONTACT PAGE TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

<div class="contact-page">
    <h1 class="page-title"><?php wp_title("", true); ?> <span>me</span></h1>
    <hr id="hr1">

    <div class="contact-page-main-content">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post"><?php the_content(); ?></div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
