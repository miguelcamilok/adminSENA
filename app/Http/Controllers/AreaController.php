<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function index(){
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }
}
