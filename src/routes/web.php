<?php

use Illuminate\Support\Facades\Route;
use Alsace\FormGenerator\Controllers\FormBuilderController;
use App\Src\User;

Route::get("/formBuilder",[FormBuilderController::class,'index']);

Route::get("/formBuilder/user",[User::class,'builder']);





?>