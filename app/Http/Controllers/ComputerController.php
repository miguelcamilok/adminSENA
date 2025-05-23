<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    //
    public function index(){
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    public function create(){
        return view('computer.create');
    }

    public function store(Request $request){

        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();
        return redirect()->route('computer.index');
    }

    public function show(Computer $computer){
        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer){
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer){
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();
        return redirect()->route('computer.index');
    }

    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computer.index');
    }
}
