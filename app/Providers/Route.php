<?php

namespace App\Providers;

class Route
{
    

    public static $validRoutes = array();

    public static function set($route, $function)
    {
        //$_GET['url'] = '';

        self::$validRoutes[] = $route;

        if ($_GET['url'] == $route) {

            #call_user_func($function);
            echo $function->__invoke();

        }
    }
}
