<?php

namespace App\Services\Impl;

use App\Models\Course;
use App\Services\CourseService;

class CourseServiceImpl implements CourseService
{
    function all()
    {
        return Course::included()->filter()->sort()->getOrPaginate();
    }

    function show($id)
    {
        return Course::with(['traingincenter', 'teachers', 'area'])->find($id);
    }

    function create(array $data)
    {
        return Course::create($data);
    }

    function update($id, array $data)
    {
        $course = Course::find($id);
        if (!$course) {
            return null;
        }

        $course->update($data);
        return $course;
    }

    function delete($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return false;
        }

        return $course->delete();
    }
}
