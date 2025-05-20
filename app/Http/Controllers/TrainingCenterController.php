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
}
