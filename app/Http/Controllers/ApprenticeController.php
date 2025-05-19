<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //
    public function index(){
        $apprentices = Apprentice::all();
        $courses = Course::all();
        $computers = Computer::all();
        return  view('apprentice.index', compact('apprentices', 'courses', 'computers'));
    }
}
