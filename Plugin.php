<?php namespace Bsbvolmachten\Slider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Slider\Components\Slider' => 'slider',
        ];
    }

    public function registerSettings()
    {
    }
}
