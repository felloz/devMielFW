<?php
namespace App\Controllers\MielFW;
use App\Providers\Route;


Route::set('about-us', function() {
    #echo "about us";
    #return AboutUs::viewFile('about-us');
    return AboutUsController::viewFile('about-us');
});

Route::set('contact-us', function() {
    #echo "Contact Us";
    echo ContactUsController::viewFile('contact-us');
});

Route::set('index.php', function() {
    return IndexController::viewFile('welcome');
});

Route::set('packages', function() {
    return Controller::view('packages', 'hola');
});
