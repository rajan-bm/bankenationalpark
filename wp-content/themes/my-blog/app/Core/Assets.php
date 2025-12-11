<?php

namespace Razan\App\Core;

class Assets
{
    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue()
    {
        $dist = get_stylesheet_directory_uri() . '/dist';
        $manifest_path = get_stylesheet_directory() . '/dist/manifest.json';

        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);
            $main = $manifest['src/js/main.js'];

            wp_enqueue_style('theme-style', $dist . '/' . $main['css'][0], [], null);
            wp_enqueue_script('theme-js', $dist . '/' . $main['file'], [], null, true);
        }
    }
}
