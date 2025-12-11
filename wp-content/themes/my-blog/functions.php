<?php
require_once __DIR__ . '/vendor/autoload.php';

use Razan\App\Core\Theme;

add_action('after_setup_theme', function () {
    $theme = new Theme();
    $theme->boot();
});
