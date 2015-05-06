<?php namespace HusayMedia\Pulitico\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Location Back-end Controller
 */
class Location extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container';

    protected $assetsPath = '/plugins/husaymedia/pulitico/assets';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('HusayMedia.Pulitico', 'pulitico', 'locations');

    }
}
