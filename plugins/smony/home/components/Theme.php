<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;
use Smony\Home\Models;

class Theme extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact',
            'description' => 'Contacts site...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getTheme(){
        #return Theme::orderBy('id', 'desc')->get();
        return Theme::get();
    }

}