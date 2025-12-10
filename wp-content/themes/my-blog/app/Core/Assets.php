<?php

namespace App\Core;

class Assets
{
    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue()
    {
        $dist = get_stylesheet_directory_uri() . '/dist';

        wp_enqueue_style('theme-style', $dist . '/main.css', [], null);
        wp_enqueue_script('theme-js', $dist . '/main.js', [], null, true);
    }
}
