<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    protected $model = Computer::class;

    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numberBetween(1, 100),
            'brand' => $this->faker->company(),
        ];
    }
}
