<?php

namespace App\Services\Impl;

use App\Models\Teacher;
use App\Services\TeacherService;

class TeacherServiceImpl implements TeacherService
{
   function all()
    {
        return Teacher::all();
    }

    function show($id)
    {
        return Teacher::with(['traingincenter', 'courses', 'area'])->find($id);
    }

    function create(array $data)
    {
        return Teacher::create($data);
    }

    function update($id, array $data)
    {
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return null;
        }

        $teacher->update($data);
        return $teacher;
    }

    function delete($id)
    {
        $teacher = Teacher::find($id);
        if (!$teacher) {
            return false;
        }

        return $teacher->delete();
    }
}
