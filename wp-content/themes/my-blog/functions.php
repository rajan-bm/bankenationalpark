<?php

require_once get_theme_file_path('app/Core/Theme.php');

add_action('after_setup_theme', function () {
    $theme = new App\Core\Theme();
    $theme->boot();
});
