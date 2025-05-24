<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Course;
use App\Models\Computer;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));
    }

    public function create(){
        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentice.create', compact('courses', 'computers'));
    }

    public function store(Request $request){
        $apprentice = new Apprentice();
        $apprentice->name = $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->course_id = $request->course_id;
        $apprentice->computer_id = $request->computer_id;
        $apprentice->save();
        return redirect()->route('apprentice.index');
    }

    public function show(Apprentice $apprentice){
        return view('apprentice.show', compact('apprentice'));
    }

    public function edit(Apprentice $apprentice){
        return view('apprentice.edit', compact('apprentice'));
    }

    public function update(Request $request, Apprentice $apprentice){
        $apprentice->name =  $request->name;
        $apprentice->email = $request->email;
        $apprentice->cell_number = $request->cell_number;
        $apprentice->save();

        return redirect()->route('apprentice.index');
    }

    function destroy(Apprentice $apprentice){
        $apprentice->delete();
        return redirect()->route('apprentice.index');
    }
}
