<?php namespace Amok\Clients;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Amok\Clients\Components\Testimonial' => 'testimonials'
        ];
    }

    public function registerSettings()
    {
    }
}
