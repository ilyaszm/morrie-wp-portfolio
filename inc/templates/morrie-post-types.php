
<h1>Custom Post Types</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="morrie-general-form">
    <?php settings_fields( 'morrie-post-types-group' ); ?>
    <?php do_settings_sections( 'morrie_post_types' ); ?>
    <?php submit_button(); ?>
</form>