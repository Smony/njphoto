<?php namespace Smony\Home\Components;


use Cms\Classes\ComponentBase;

#use Smony\Home\Models\Work;


class Work extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Work Item',
            'description' => 'View work items...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getWorks()
    {
        return Work::orderBy('id', 'desc')->get();
    }

}