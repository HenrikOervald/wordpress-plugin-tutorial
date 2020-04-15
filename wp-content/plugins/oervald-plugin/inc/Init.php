<?php

/**
 * @package OervaldPlugin
 */

namespace Inc;

final class Init
{
    /**
     * Store all classes inside an array
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop throug all classes in get_services(), and calls ther register method
     * @return
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * @param class $class      class frim the service array
     * @return class instance   new instance of the class
     */
    private static function instantiate($class)
    {
        return new $class();
    }
}