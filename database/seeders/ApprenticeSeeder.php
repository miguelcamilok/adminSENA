<?php

namespace Database\Seeders;

use App\Models\Apprentice;
use Illuminate\Database\Seeder;

class ApprenticeSeeder extends Seeder
{
    public function run(): void
    {
        Apprentice::factory(20)->create();
    }
}

