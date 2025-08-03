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
        $this->call([
            AreaSeeder::class,
            TrainingCenterSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            ComputerSeeder::class,
            ApprenticeSeeder::class,
        ]);
    }
}
