<?php

namespace LukeNoble\Philter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'LukeNoble\Philter\Components\RecentImages' => 'RecentImages',
            'LukeNoble\Philter\Components\UserImages' => 'UserImages',
            'LukeNoble\Philter\Components\AddImages' => 'AddImages',
            'LukeNoble\Philter\Components\DeleteImage' => 'DeleteImage',


        ];
    }

    public function registerSettings()
    {
    }
}
