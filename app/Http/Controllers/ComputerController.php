<?php

namespace App\Http\Controllers;

use App\Http\Requests\Computer\StoreComputerRequest;
use App\Http\Requests\Computer\UpdateComputerRequest;
use App\Models\Computer;
use App\Services\ComputerService;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    protected $computerService;

    function __construct(ComputerService $computerService)
    {
        $this->computerService = $computerService;
    }

    function index()
    {
        $computers = $this->computerService->all();
        return response()->json($computers);
    }

    function show($id)
    {
        $computer = $this->computerService->show($id);
        if(!$computer){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json($computer);
    }

    function store(StoreComputerRequest $request)
    {
        $computer = $this->computerService->create($request->validated());
        return response()->json(['message' => 'computer agregada correctamente.', 'data' => $computer], 201);
    }

    function update(UpdateComputerRequest $request, $id)
    {
        $computer = $this->computerService->update($id, $request->validated());
        if(!$computer){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente', 'data' => $computer]);
    }

    function destroy($id)
    {
        $computer = $this->computerService->delete($id);
        if(!$computer){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
