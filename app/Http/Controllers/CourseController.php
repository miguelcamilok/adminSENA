<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::with('area', 'trainingCenter')->get();
        return view('course.index', compact('courses'));
    }
}
