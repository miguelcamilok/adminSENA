<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){

        $teachers = Teacher::included()->get();
        return response()->json($teachers);
        // $teachers = Teacher::all();
        // return view('teacher.index', compact('teachers'));
    }

    public function create(){
        $areas = Area::all();
        $trainingcenters = TrainingCenter::all();
        return view('teacher.create', compact('areas', 'trainingcenters', 'areas'));
    }

    public function store(Request $request){
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;
        $teacher->save();

        return redirect()->route('teacher.index');
    }

    public function show(Teacher $teacher){
        return view('teacher.show', compact('teacher'));
    }

    public function edit(Teacher $teacher){
        return view('teacher.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher){
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();

        return redirect()->route('teacher.index');
    }

    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
