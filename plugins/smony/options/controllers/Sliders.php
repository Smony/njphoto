<?php namespace Smony\Options\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Sliders Back-end Controller
 */
class Sliders extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Smony.Options', 'options', 'sliders');
    }
}