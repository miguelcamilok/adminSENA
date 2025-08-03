<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Area::factory(10)->create();
        \App\Models\TrainingCenter::factory(10)->create();

        \App\Models\Teacher::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\Computer::factory(10)->create();
        \App\Models\Apprentice::factory(10)->create();
    }
}
