<?php
namespace Razan\App\Core;

class Theme
{
    public function boot()
    {
        (new Setup())->register();
        (new Assets())->register();
        // (new PostTypes())->register();
        // (new Taxonomies())->register();
    }
}
