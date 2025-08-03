<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Course;
use App\Models\TrainingCenter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'course_number' => $this->faker->unique()->numberBetween(100, 999),
            'day' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']),
            'area_id' => Area::factory(),
            'training_center_id' => TrainingCenter::factory(),
        ];
    }
}
