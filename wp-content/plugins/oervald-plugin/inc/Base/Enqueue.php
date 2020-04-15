<?php
/**
 * @package OervaldPlugin
 */
namespace Inc\Base;

class Enqueue{
    function register(){
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('mypluginstyle', PLUGIN_URL.'/assets/mystyle.css');
        wp_enqueue_script('mypluginscript', PLUGIN_URL.'/assets/myscript.js');
    }
}