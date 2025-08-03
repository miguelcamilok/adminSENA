<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\CourseTeacher;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::factory(8)->create()->each(function ($course) {
            $teachers = Teacher::inRandomOrder()->limit(2)->pluck('id');
            $course->teachers()->sync($teachers); // Usa la relación many-to-many
        });
    }
}

