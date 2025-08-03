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
            'course_number' => $this->faker->unique()->randomNumber(5),
            'day' => $this->faker->randomElement(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes']),
            'area_id' => Area::inRandomOrder()->first()?->id ?? Area::factory(),
            'training_center_id' => TrainingCenter::inRandomOrder()->first()?->id ?? TrainingCenter::factory(),
        ];
    }
}
