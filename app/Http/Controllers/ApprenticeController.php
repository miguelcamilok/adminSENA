<?php

namespace App\Http\Controllers;

use App\Http\Requests\Apprentice\StoreApprenticeRequest;
use App\Http\Requests\Apprentice\UpdateApprenticeRequest;
use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Course;
use App\Models\Computer;
use App\Models\TrainingCenter;
use App\Services\ApprenticeService;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    protected $apprenticeService;

    public function __construct(ApprenticeService $apprenticeService)
    {
        $this->apprenticeService = $apprenticeService;
    }

    function index()
    {
        $apprentices = $this->apprenticeService->all();
        return response()->json($apprentices);
    }

    function show($id)
    {
        $apprentice = $this->apprenticeService->show($id);
        if(!$apprentice){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($apprentice);
    }

    function store(StoreApprenticeRequest $request)
    {
        $apprentice = $this->apprenticeService->create($request->validate());
        return response()->json(['message' => 'Aprendiz agregado correctamente.', 'data' => $apprentice], 201);
    }

    function update(UpdateApprenticeRequest $request, $id)
    {
        $apprentice = $this->apprenticeService->update($id, $request->validate());
        if(!$apprentice){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente.', 'data' => $apprentice]);
    }

    function destroy($id)
    {
        $apprentice = $this->apprenticeService->delete($id);
        if(!$apprentice){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
