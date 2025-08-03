<?php

namespace Database\Factories;
use App\Models\TrainingCenter;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainingCenter>
 */
class TrainingCenterFactory extends Factory
{
    protected $model = TrainingCenter::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'location' => $this->faker->city(),
        ];
    }
}
