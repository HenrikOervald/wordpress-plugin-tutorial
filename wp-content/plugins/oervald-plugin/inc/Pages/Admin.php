<?php

/**
 * @package OervaldPlugin
 */

namespace Inc\Pages;
use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
class Admin extends BaseController
{
    public $settings;
    public $pages = array();

    function __construct()
    {
        $this->settings = new SettingsApi();
        $this->pages = [
            [
            'page_title' => 'Oervald Plugin',
            'menu_title' => 'Oervald',
            'capability' => 'manage_options',
            'menu_slug' => 'oervald_plugin',
            'callback' => function(){ echo '<h1>Oervald Plugin</h1>';},
            'icon_url' => 'dashicon-store',
            'position' => 110
            ]
        ];
    }

    public function register()
    {
        $this->settings->addPages($this->pages)->register();
    } 
}