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

Route::prefix('apprentices')->group(function(){
    Route::get('/', [ApprenticeController::class, 'index']);
    Route::post('/', [ApprenticeController::class, 'store']);
    Route::get('{id}', [ApprenticeController::class, 'show']);
    Route::put('{id}', [ApprenticeController::class, 'update']);
    Route::delete('{id}', [ApprenticeController::class, 'destroy']);
});

Route::prefix('areas')->group(function(){
    Route::get('/', [AreaController::class, 'index']);
    Route::post('/', [AreaController::class, 'store']);
    Route::get('{id}', [AreaController::class, 'show']);
    Route::put('{id}', [AreaController::class, 'update']);
    Route::delete('{id}', [AreaController::class, 'destroy']);
});

Route::prefix('computers')->group(function(){
    Route::get('/', [ComputerController::class, 'index']);
    Route::post('/', [ComputerController::class, 'store']);
    Route::get('{id}', [ComputerController::class, 'show']);
    Route::put('{id}', [ComputerController::class, 'update']);
    Route::delete('{id}', [ComputerController::class, 'destroy']);
});

Route::prefix('courses')->group(function(){
    Route::get('/', [CourseController::class, 'index']);
    Route::post('/', [CourseController::class, 'store']);
    Route::get('{id}', [CourseController::class, 'show']);
    Route::put('{id}', [CourseController::class, 'update']);
    Route::delete('{id}', [CourseController::class, 'destroy']);
});

Route::prefix('teachers')->group(function(){
    Route::get('/', [TeacherController::class, 'index']);
    Route::post('/', [TeacherController::class, 'store']);
    Route::get('{id}', [TeacherController::class, 'show']);
    Route::put('{id}', [TeacherController::class, 'update']);
    Route::delete('{id}', [TeacherController::class, 'destroy']);
});

Route::prefix('trainingcenters')->group(function(){
    Route::get('/', [TrainingCenterController::class, 'index']);
    Route::post('/', [TrainingCenterController::class, 'store']);
    Route::get('{id}', [TrainingCenterController::class, 'show']);
    Route::put('{id}', [TrainingCenterController::class, 'update']);
    Route::delete('{id}', [TrainingCenterController::class, 'destroy']);
});

