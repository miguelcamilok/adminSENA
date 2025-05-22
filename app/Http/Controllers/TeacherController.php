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

    public function create(){
        return view('teacher.create');
    }

    public function store(Request $request){
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();
        return redirect()->route('teacher.index');
    }
}
