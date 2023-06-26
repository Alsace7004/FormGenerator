<?php

use App\Src\User;
use App\Src\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Alsace\FormGenerator\Controllers\FormBuilderController;


Route::any('formBuilder/{variable_name}', function($variable_name){

    $path = sprintf("\App\Src\%s", $variable_name."@");
    $s = app_path(sprintf("\Src\%s",$variable_name.".php"));
    //dd($s);
    if (file_exists($s)) {
        //return "File exist.";
        return App::call($path . 'builder');
    } else {
        //return "File does not exist.";
        abort(404);
    }
    
})->where('variable_name', '.*');





?>