<?php

namespace App\Http\Controllers;

use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Teacher\UpdateTeacherRequest;
use App\Services\TeacherService;

class TeacherController extends Controller
{
    protected $teacherService;

    function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    function index()
    {
        $teachers = $this->teacherService->all();
        return response()->json($teachers);
    }

    function show($id)
    {
        $teacher = $this->teacherService->show($id);
        if(!$teacher){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json($teacher);
    }

    function store(StoreTeacherRequest $request)
    {
        $teacher = $this->teacherService->create($request->validated());
        return response()->json(['message' => 'teacher agregada correctamente.', 'data' => $teacher], 201);
    }

    function update(UpdateTeacherRequest $request, $id)
    {
        $teacher = $this->teacherService->update($id, $request->validated());
        if(!$teacher){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente', 'data' => $teacher]);
    }

    function destroy($id)
    {
        $teacher = $this->teacherService->delete($id);
        if(!$teacher){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
