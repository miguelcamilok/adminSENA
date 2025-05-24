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
Route::get('areas/{area}', [AreaController::class, 'show'])->name('area.show');
Route::put('areas/{area}', [AreaController::class, 'update'])->name('area.update');
Route::get('areas/{area}/editar', [AreaController::class, 'edit'])->name('area.edit');
Route::delete('areas/{area}', [AreaController::class, 'destroy'])->name('area.destroy');


Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenters/create', [TrainingCenterController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenters/store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('trainingcenter.show');
Route::put('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'update'])->name('trainingcenter.update');
Route::get('trainingcenters/{trainingcenter}/editar', [TrainingCenterController::class, 'edit'])->name('trainingcenter.edit');
Route::delete('trainingcenters/{trainingcenter}', [TrainingCenterController::class, 'destroy'])->name('trainingcenter.destroy');


Route::get('teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::put('teachers/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::get('teachers/{teacher}/editar', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');



Route::get('courses', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::get('course/{course}/editar', [CourseController::class, 'edit'])->name('course.edit');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');


Route::get('computers', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computers/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computers/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::put('computers/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::get('computers/{computer}/editar', [ComputerController::class, 'edit'])->name('computer.edit');
Route::delete('computers/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');


Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentices/create', [ApprenticeController::class, 'create'])->name('apprentice.create');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentices/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::put('apprentices/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');
Route::get('apprentices/{apprentice}/editar', [ApprenticeController::class, 'edit'])->name('apprentice.edit');
Route::delete('apprentices/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentice.destroy');

    

