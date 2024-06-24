<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchemeSkkni>
 */
class SchemeSkkniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'scheme_code' => fake()->unique()->ean13(),
            // 'skkni_id' => fake()->uuid(),
        ];
    }
}
