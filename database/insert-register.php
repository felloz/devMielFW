<?php

use Illuminate\Database\Capsule\Manager as MielDB;
use Carbon\Carbon;

require '../vendor/autoload.php';


try {

 $query = MielDB::insert('insert into users (email, created_at, updated_at) values (?, ?, ?)', ['serranols81s2@gmail.com', Carbon::now(), Carbon::now()]);
 echo "Query executed: ";
    
} catch (\Throwable $th) {

    echo "MielDB Error: " . $th->getMessage();

}
