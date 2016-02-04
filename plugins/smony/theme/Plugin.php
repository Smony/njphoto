<?php namespace Smony\Theme;

use Backend;
use Cms;
use System\Classes\PluginBase;

/**
 * theme Plugin Information File
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
            'name'        => 'theme',
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
        return []; // Remove this line to activate

        return [
            'Smony\Theme\Components\MyComponent' => 'myComponent',
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
            'smony.theme.some_permission' => [
                'tab' => 'theme',
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
        return []; // Remove this line to activate

        return [
            'theme' => [
                'label'       => 'theme',
                'url'         => Cms::url('smony/theme/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['smony.theme.*'],
                'order'       => 500,
            ],
        ];
    }

}
