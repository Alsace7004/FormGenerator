<?php

use Illuminate\Support\Facades\Route;
use Alsace\FormGenerator\Controllers\FormBuilderController;

Route::get("/formBuilder",[FormBuilderController::class,'index'])





?>