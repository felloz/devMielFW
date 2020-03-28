<?php
use Illuminate\Database\Capsule\Manager as MielDB;

require '../vendor/autoload.php';

try {

        MielDB::schema()->create('users', function ($table) {
        $table->increments('id');
        $table->string('email')->unique();
        $table->timestamps();
        
    });
} catch (\Throwable $th) {

    echo $th->getMessage();
}
