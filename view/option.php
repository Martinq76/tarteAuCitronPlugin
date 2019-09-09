<div class="wrap">
    <h1>Configuration</h1>

    <form method="POST" action="option.php">
        <?php
        settings_fields('LAMANU_google_Analytics');
        do_settings_sections('Configuration'); ?>
        <input type="text" name="googleAnalytics" id="googleAnalytics" value="<?= get_option('google_analytics', 'UA-00000000-0')  ?>" />
        <?= submit_button(); ?>
    </form>
</div>