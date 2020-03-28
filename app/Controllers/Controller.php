<?php

namespace App\Controllers\MielFW;
//use Illuminate\Database\Capsule\Manager as MielDB;

abstract class Controller
{
    public static function viewFile($view)
    {
       require_once "../resources/views/$view.php";
    }

    public static function view($file, $values)
    {
        require_once "../resources/views/$file.php";
    }
    
}