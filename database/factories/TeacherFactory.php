<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Teacher;
use App\Models\TrainingCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'area_id' => Area::factory(),
            'training_center_id' => TrainingCenter::factory(),
        ];
    }
}
