<?php
/**
 *  FRONT PAGE TEMPLATE
 * 
 *  @package portfoliothemes
 */
?>

<?php get_header(); ?>

        <div class="front-page">

            <div class="showcase">
                <img src="<?php echo get_theme_mod('profile_image', get_bloginfo('template_url') . '/assets/images/profile.png') ?>" alt="">
                <h1><?php echo get_theme_mod( 'home_page_heading', 'Web Developer' ); ?></h1>
                <p><?php echo get_theme_mod('home_page_text', 'Specializing in WordPress theme development.'); ?></p>
            </div>

            <div class="infos">
                <div class="box">
                    <i class="fas fa-quote-right"></i>
                    <p><?php echo get_theme_mod('quote_text', 'Live life to the fullest, ans focus on the positive. - Matt Cameron'); ?></p>
                </div>
                <div class="buttons">
                    <a href="<?php echo get_theme_mod('vw_btn_url', 'http://localhost/portfoliothemes/index.php/portfolio/'); ?>"><button id="btnViewWork"><?php echo get_theme_mod('vw_btn_text', 'See My Work'); ?></button></a>
                    <a href="<?php echo get_theme_mod('cm_btn_url', 'http://localhost/portfoliothemes/index.php/contact/'); ?>"><button id="btnContact"><?php echo get_theme_mod('cm_btn_text', 'Contact Me'); ?></button></a>
                </div>
                <div class="social-icons">
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

        <footer>
            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
        </footer>
    
        <?php wp_footer(); ?>

    </body>
</html>