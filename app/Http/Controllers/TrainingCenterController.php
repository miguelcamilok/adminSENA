<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainingCenter\StoreTrainingCenterRequest;
use App\Http\Requests\TrainingCenter\UpdateTrainingCenterRequest;
use App\Models\TrainingCenter;
use App\Services\TrainingCenterService;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    protected $trainingCenterService;

    function __construct(TrainingCenterService $trainingCenterService)
    {
        $this->trainingCenterService = $trainingCenterService;
    }

    function index()
    {
        $teachers = $this->trainingCenterService->all();
        return response()->json($teachers);
    }

    function show($id)
    {
        $teacher = $this->trainingCenterService->show($id);
        if(!$teacher){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json($teacher);
    }

    function store(StoreTrainingCenterRequest $request)
    {
        $teacher = $this->trainingCenterService->create($request->validate());
        return response()->json(['message' => 'teacher agregada correctamente.', 'data' => $teacher], 201);
    }

    function update(UpdateTrainingCenterRequest $request, $id)
    {
        $teacher = $this->trainingCenterService->update($id, $request->validate());
        if(!$teacher){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente', 'data' => $teacher]);
    }

    function destroy($id)
    {
        $teacher = $this->trainingCenterService->delete($id);
        if(!$teacher){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
