<?php


namespace App\Service;

class BaseService
{
    protected static $instance = [];

    public static function forge()
    {
        $class = get_called_class();
        if(!isset(self::$instance[$class])) {
            self::$instance[$class] = new $class;
        }
        return self::$instance;
    }
}
