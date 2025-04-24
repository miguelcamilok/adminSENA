<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('y', [OrmController::class, 'consultas']);
