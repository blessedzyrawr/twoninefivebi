<?php namespace HusayMedia\Pulitico;

use Backend;
use Controller;
use System\Classes\PluginBase;
use Event;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'husaymedia.pulitico::lang.plugin.name',
            'description' => 'husaymedia.pulitico::lang.plugin.description',
            'author'      => 'Zyra Mae Bambico',
            'icon'        => 'icon-user-secret',
            'homepage'    => 'http://husaymedia.com'
        ];
    }

    public function registerComponents()
    {
        return [
            'HusayMedia\Pulitico\Components\Politician'       => 'politician',
            'HusayMedia\Pulitico\Components\Politicians'       => 'politicians',
            'HusayMedia\Pulitico\Components\Directory'       => 'directory'
        ];
    }

    public function registerPermissions()
    {
        return [
            'husaymedia.pulitico.manage_pulitico'       => ['tab' => 'Pulitico', 'label' => 'husaymedia.pulitico::lang.permissions.manage_pulitico']
        ];
    }

    public function registerNavigation()
    {
        return [
            'pulitico' => [
                'label'       => 'Pulitico',
                'url'         => Backend::url('husaymedia/pulitico/politician'),
                'icon'        => 'icon-user-secret',
                'permissions' => ['husaymedia.pulitico.manage_pulitico'],
                'order'       => 300,

                'sideMenu' => [
                    'politician' => [
                        'label'       => 'Politicians',
                        'icon'        => 'icon-user-secret',
                        'url'         => Backend::url('husaymedia/pulitico/politician'),
                        'permissions' => ['husaymedia.pulitico.manage_pulitico']
                    ],
                    'titles' => [
                        'label'       => 'Titles',
                        'icon'        => 'icon-gavel',
                        'url'         => Backend::url('husaymedia/pulitico/title'),
                        'permissions' => ['husaymedia.pulitico.manage_pulitico']
                    ],
                    'locations' => [
                        'label'       => 'Locations',
                        'icon'        => 'icon-map-marker',
                        'url'         => Backend::url('husaymedia/pulitico/location'),
                        'permissions' => ['husaymedia.pulitico.manage_pulitico']
                    ]
                ]
            ],
        ];
    }
}
