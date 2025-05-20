<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    //
    public function index()
    {
        $apprentices = Apprentice::with('computer', 'course')->get();
        return view('apprentice.index', compact('apprentices'));
    }
}
