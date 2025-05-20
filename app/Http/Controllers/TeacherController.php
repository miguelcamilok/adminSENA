<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        $teachers = Teacher::with('area', 'trainingCenter')->get();
        return view('teacher.index', compact('teachers'));
    }
}
