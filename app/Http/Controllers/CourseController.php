<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Models\TrainingCenter;
use App\Models\Area;
use App\Models\Teacher;
use App\Services\CourseService;
use App\Services\CouseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseService;

    function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    function index()
    {
        $courses = $this->courseService->all();
        return response()->json($courses);
    }

    function show($id)
    {
        $course = $this->courseService->show($id);
        if(!$course){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json($course);
    }

    function store(StoreCourseRequest $request)
    {
        $course = $this->courseService->create($request->validate());
        return response()->json(['message' => 'course agregada correctamente.', 'data' => $course], 201);
    }

    function update(UpdateCourseRequest $request, $id)
    {
        $course = $this->courseService->update($id, $request->validate());
        if(!$course){
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json(['message' => 'Actualizado correctamente', 'data' => $course]);
    }

    function destroy($id)
    {
        $course = $this->courseService->delete($id);
        if(!$course){
            return response()->json(['message' => 'No encontrado.'], 404);
        }

        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}
