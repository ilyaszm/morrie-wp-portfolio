
<h1>Theme Support</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="morrie-general-form">
    <?php settings_fields( 'morrie-theme-support-group' ); ?>
    <?php do_settings_sections( 'morrie_theme_support' ); ?>
    <?php submit_button(); ?>
</form>
