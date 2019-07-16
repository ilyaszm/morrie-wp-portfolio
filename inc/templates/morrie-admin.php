
<h1>General Options</h1>

<?php settings_errors(); ?>

<form action="options.php" method="post" class="morrie-general-form">
    <?php settings_fields( 'morrie-settings-group' ); ?>
    <?php do_settings_sections( 'morrie_options' ); ?>
    <?php submit_button(); ?>
</form>
