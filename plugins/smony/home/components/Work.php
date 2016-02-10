<?php namespace Smony\Home\Components;

use Cms\Classes\ComponentBase;

class Work extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Work Item Component',
            'description' => 'View work items...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}