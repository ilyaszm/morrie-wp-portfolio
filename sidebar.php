<?php
/**
 *  SIDEBAR TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<aside class="sidebar">

    <div class="author-box">
        <h4>About Me</h4>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php echo wpautop( get_the_author_meta( 'description' )); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="sidebar-dynamic">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </div>

</aside>
