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
Route::get('areas/create', [AreaController::class, 'create'])->name('area.create');
Route::post('areas/store', [AreaController::class, 'store'])->name('area.store');

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenters/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenters/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');

Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teachers/store', [TeacherController::class, 'store'])->name('teacher.store');

Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');

