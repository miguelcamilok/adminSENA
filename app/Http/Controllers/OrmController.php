<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apprentice;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    //
    public function consultas(){

         $area = Area::find(1);
         return $area->courses;

        // $trainingCenter = TrainingCenter::find(1);
        // return $trainingCenter->teachers;

        // $teacher = Teacher::find(1);
        // return $teacher->area;

        // $course = Course::find(1);
        // return $course->apprentices;

        // $computer = Computer::find(1);
        // return $computer->apprentice;

        // $apprentice = Apprentice::find(1);
        // return $apprentice->course;

        // return Teacher::with('Area.Courses.Apprentices.Computer')->get();
    }
}
