<?php
namespace MielFW;

require '../vendor/autoload.php';

try {
    
    $matchThese = [];
    $matchThese = ["id" => 1];
    $users = User::where($matchThese)->first();
    dd($users->email);

} catch (\Throwable $th) {

    echo "Error: " . $th->getMessage();

}