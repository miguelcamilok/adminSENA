<?php

namespace Database\Factories;

use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprentice>
 */
class ApprenticeFactory extends Factory
{
    protected $model = Apprentice::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'cell_number' => $this->faker->numberBetween(3000000000, 3999999999),
            'course_id' => Course::factory(),
            'computer_id' => Computer::factory(),
        ];
    }
}
