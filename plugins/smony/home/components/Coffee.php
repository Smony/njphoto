<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;

class Coffee extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Coffee Items',
            'description' => 'Coffee Items Component...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}