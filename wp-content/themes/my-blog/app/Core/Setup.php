<?php

namespace Razan\App\Core;

class Setup
{
    public function register()
    {
        add_action('after_setup_theme', [$this, 'supports']);
        add_action('init', [$this, 'menus']);
    }

    public function supports()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['search-form','gallery','caption']);
    }

    public function menus()
    {
        register_nav_menus([
            'main-menu' => 'Main Menu'
        ]);
    }
}
