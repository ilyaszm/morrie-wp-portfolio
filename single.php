<?php
/**
 *  SINGLE TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

<div class="content">
    <div class="main-content">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part( '/templates-parts/content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
