<?php

use Illuminate\Support\Facades\Route;
use Alsace\FormGenerator\Controllers\FormBuilderController;
use App\Src\User;
use App\Src\Client;

Route::get("/formBuilder",[FormBuilderController::class,'index']);

Route::get("/formBuilder/user",[User::class,'builder']);
Route::get("/formBuilder/client",[Client::class,'builder']);

Route::get("/formBuilder/files",[Client::class,'list']);





?>