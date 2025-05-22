<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //
    public function index(){
        $trainingcenters = TrainingCenter::with('teachers', 'courses')->get();
        return view('trainingcenter.index', compact('trainingcenters'));
    }

    public function create(){
        return view('trainingcenter.create');
    }

    public function store(Request $request){

        $trainingcenter = new TrainingCenter();
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();
        return redirect()->route('trainingcenter.index');

    }
}
