<?php
/**
 *  ABOUT PAGE TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

<div class="about-page">
    <h1 class="page-title"><span>info</span> <?php wp_title("", true); ?> <span>me</span></h1>
    <hr id="hr1">

    <div class="main-content">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

                <div class="card">
                    <div class="card-header">
                        <img id="about-img" src="<?php echo get_theme_mod('profile_image_2', get_bloginfo('template_url') . '/assets/images/profile2.jpg') ?>" alt="">
                        <div class="name">John <span>Doe</span></div>
                    </div>
                    <div class="card-footer">
                        <h2 class="card-footer-title">Reach Me <div class="border"></div></h2>
                        <div class="s-m">
                            <ul>
                                <li><a href="<?php echo get_theme_mod( 'tw_btn_url', 'https://twitter.com/' ) ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo get_theme_mod( 'fb_btn_url', 'https://www.facebook.com/' ) ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo get_theme_mod( 'be_btn_url', 'https://www.behance.net/' ) ?>"><i class="fab fa-behance"></i></a></li>
                                <li><a href="<?php echo get_theme_mod( 'dr_btn_url', 'https://dribbble.com/' ) ?>"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="<?php echo get_theme_mod( 'yt_btn_url', 'https://www.youtube.com/' ) ?>"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr id="hr2">
                <div class="post">
                    <?php the_content(); ?>
                </div>
                    
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
