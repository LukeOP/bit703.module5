<?php

namespace LukeNoble\Philter\Components;

use Cms\Classes\ComponentBase;
use LukeNoble\Philter\Models\Image as ImageModel;
use Auth;

class UserImages extends ComponentBase
{

    public $images;
    public $user;

    public function componentDetails()
    {
        return [
            'name'        => 'UserImages Component',
            'description' => 'Shows Users Images'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function OnRender()
    {
        $user = Auth::getUser();
        $this->images = [];
        if (is_object($user)) {
            $this->images = ImageModel::usersImages($user->id)->get();
        }
    }
}
