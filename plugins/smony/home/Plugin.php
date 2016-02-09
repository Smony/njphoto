<?php namespace Smony\Home;

use Backend;
use System\Classes\PluginBase;

/**
 * home Plugin Information File
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
            'name'        => 'home',
            'description' => 'No description provided yet...',
            'author'      => 'Smony',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        #return []; // Remove this line to activate

        return [
            'Smony\Home\Components\Theme' => 'home',
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
            'smony.home.some_permission' => [
                'tab' => 'home',
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
        #return []; // Remove this line to activate

        return [
            'home' => [
                'label'       => 'home',
                'url'         => Backend::url('smony/home/theme'),
                'icon'        => 'icon-desktop',
                #'permissions' => ['smony.home.*'],
                'order'       => 500,
                'sideMenu' => [
                    'contact' => [
                        'label'       => 'Contact',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('smony/home/theme'),
                    ],

                ]
            ]
        ];
    }

}
