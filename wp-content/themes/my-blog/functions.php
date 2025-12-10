<?php
require_once __DIR__ . '/vendor/autoload.php';

add_action('after_setup_theme', function () {
    $theme = new App\Core\Theme();
    $theme->boot();
});
