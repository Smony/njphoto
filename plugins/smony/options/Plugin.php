<?php namespace Smony\Options;

use Backend;
use System\Classes\PluginBase;

/**
 * options Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'options',
            'description' => 'No description provided yet...',
            'author'      => 'Smony',
            'icon'        => 'icon-wrench'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Smony\Options\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'smony.options.some_permission' => [
                'tab' => 'options',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'options' => [
                'label'       => 'Настройки',
                'url'         => Backend::url('smony/options/opt'),
                'icon'        => 'icon-pencil',
                'permissions' => ['smony.options.*'],
                'order'       => 500,

                'sideMenu' => [
                    'slider' => [
                        'label'       => 'Слайдер',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('smony/options/slider'),
                        'permissions' => ['smony.options.*']

                    ],
                    'test' => [
                        'label'       => 'Тест',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('smony/options/test'),
                        'permissions' => ['smony.options.*']

                    ]
                ]
            ]
        ];
/*
        return [
            'options' => [
                'label'       => 'Настройки',
                'url'         => Backend::url('smony/options/options'),
                'icon'        => 'icon-wrench',
                'permissions' => ['smony.options.*'],
                'order'       => 500,
                'sideMenu' => [
                    'options' => [
                        'label'       => 'Товары',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('smony/options/options')
                    ],
                    'categories' => [
                        'label'       => 'Categories',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('smony/options/categories')
                        #'permissions' => ['acme.blog.access_categories']
                    ]
                ]
            ]
        ];
*/
    }

}
