<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\TrainingCenter;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Computer;
use App\Models\Apprentice;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear centros y áreas fijos
        $trainingCenters = TrainingCenter::factory(5)->create();
        $areas = Area::factory(5)->create();

        foreach ($areas as $area) {
            foreach ($trainingCenters as $tc) {
                // Crear 2 cursos por combinación área - centro
                $courses = Course::factory(2)->create([
                    'area_id' => $area->id,
                    'training_center_id' => $tc->id,
                ]);

                // Crear 2 profesores por combinación área - centro
                Teacher::factory(2)->create([
                    'area_id' => $area->id,
                    'training_center_id' => $tc->id,
                ]);

                foreach ($courses as $course) {
                    // Crear 2 computadoras por curso
                    $computers = Computer::factory(2)->create();

                    foreach ($computers as $computer) {
                        // Crear 1 aprendiz por curso y computador
                        Apprentice::factory()->create([
                            'course_id' => $course->id,
                            'computer_id' => $computer->id,
                        ]);
                    }
                }
            }
        }
    }
}

