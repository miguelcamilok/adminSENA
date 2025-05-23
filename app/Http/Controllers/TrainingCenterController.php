<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    //
    public function index(){
        $trainingcenters = TrainingCenter::all();
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

    public function show(TrainingCenter $trainingcenter){
        return view('trainingcenter.show', compact('trainingcenter'));
    }

    public function edit(TrainingCenter $trainingcenter){
        return view('trainingcenter.edit', compact('trainingcenter'));
    }

    public function update(Request $request, TrainingCenter $trainingcenter){
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();
        return redirect()->route('trainingcenter.index');
    }

    public function destroy(TrainingCenter $trainingcenter){
        $trainingcenter->delete();
        return redirect()->route('trainingcenter.index');
    }
}
