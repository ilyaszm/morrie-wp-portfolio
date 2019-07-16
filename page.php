<?php
/**
 *  PAGE TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

<div class="content">
    <div class="main-content">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post">
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
