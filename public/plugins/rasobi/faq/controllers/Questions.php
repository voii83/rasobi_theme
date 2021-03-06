<?php namespace Rasobi\Faq\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Questions Back-end Controller
 */
class Questions extends Controller
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

        BackendMenu::setContext('Rasobi.Faq', 'faq', 'questions');
    }
}
