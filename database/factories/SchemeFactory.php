<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skema>
 */
class SchemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'code' => fake()->unique()->ean13(),
            'type' => fake()->word(),
            'skkni' => fake()->ean8(),
            'faculty' => fake()->word(2),
            'department' => fake()->word(2),
            'status' => fake()->word(),
            'basicRequirement' => fake()->sentence(),
        ];
    }
}
