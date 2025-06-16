<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function index(){

        $areas = Area::included()->get();
        return response()->json($areas);
        // $areas = Area::all();
        // return view('area.index', compact('areas'));
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

    public function show(Area $area){
        return view('area.show', compact('area'));
    }

    public function edit(Area $area){
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area){
        $area->name = $request->name;
        $area->save();
        return redirect()->route('area.index');
    }

    public function destroy(Area $area){
        $area->delete();
        return redirect()->route('area.index');
    }


}
