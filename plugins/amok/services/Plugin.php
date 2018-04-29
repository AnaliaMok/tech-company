<?php namespace Amok\Services;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Amok\Services\Components\Service' => 'services'
        ];
    }

    // public function registerSettings()
    // {
        
    // }
}
