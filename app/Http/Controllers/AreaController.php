<?php

namespace App\Http\Controllers;

use App\Http\Requests\Area\StoreAreaRequest;
use App\Http\Requests\Area\UpdateAreaRequest;
use App\Models\Area;
use App\Services\AreaService;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    protected $areaService;

    function __construct(AreaService $areaService)
    {
        $this->areaService = $areaService;
    }

    function index()
    {
        $areas = $this->areaService->all();
        return response()->json($areas);
    }

    function show($id)
    {
        $area = $this->areaService->show($id);
        if(!$area){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json($area);
    }

    function store(StoreAreaRequest $request)
    {
        $area = $this->areaService->create($request->validate());
        return response()->json(['message' => 'Area agregada correctamente.', 'data' => $area], 201);
    }

    function update(UpdateAreaRequest $request, $id)
    {
        $area = $this->areaService->update($id, $request->validate());
        if(!$area){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente', 'data' => $area]);
    }

    function destroy($id)
    {
        $area = $this->areaService->delete($id);
        if(!$area){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
