<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('computers', [ComputerController::class,'index'])->name('api.computer.index.test');
Route::get('apprentices', [ApprenticeController::class,'index'])->name('api.apprentice.index.test');
Route::get('areas', [AreaController::class,'index'])->name('api.areas.index.test');
Route::get('courses', [CourseController::class,'index'])->name('api.areas.index.test');
Route::get('teachers', [TeacherController::class,'index'])->name('api.teacher.index.test');
Route::get('trainingcenters', [TrainingCenterController::class,'index'])->name('api.trainingcenters.index.test');