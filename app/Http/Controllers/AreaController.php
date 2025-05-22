<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function index(){
        $areas = Area::with(['teachers', 'courses'])->get();
        return view('area.index', compact('areas'));
    }

    public function create(){
        return view('area.create');
    }

    public function store(Request $request){
        $area = new Area();
        $area->name = $request->name;
        $area->save();
        return redirect()->route('area.index');
    }


}
