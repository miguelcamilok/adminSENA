<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ApprenticeController;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\TrainingCenter;

Route::get('/', function () {
    return view('home.index');
});

Route::get('orm', [OrmController::class, 'consultas']);
Route::get('areas', [AreaController::class, 'index'])->name('area.index');
Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');

