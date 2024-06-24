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
            'code' => fake()->unique()->ean13(),
            'name' => fake()->sentence(),
            'type' => fake()->randomElement(['KKNI', 'Okupasi', 'Klaster']),
            'licenseNumber' => fake()->unique()->ean8(),
            'faculty' => fake()->randomElement(['Teknik', 'Ilmu Komunikasi', 'Sastra', 'Ekonomi dan Bisnis', 'Ilmu Hukum', 'Ilmu Pariwisata']),
            'department' => fake()->randomElement(['Teknik Informatika', 'Teknik Geomatika', 'Ilmu Komunikasi Sosial', 'Ilmu Pariwisata', 'Ilmu Kesehatan', 'Ekonomi', 'Ilmu Administrasi Negara', 'Ilmu Hukum']),
            'status' => fake()->randomElement(['Berlaku', 'Tidak Berlaku']),
            'skkni' => fake()->paragraph(1),
            'basicRequirements' => implode('', [fake()->paragraph() . ' zzz ', fake()->paragraph() . ' zzz ', fake()->paragraph()]),
            // 'basicRequirements' => implode(', zzz', [fake()->paragraph() . ', zzz', fake()->paragraph() . ', zzz', fake()->paragraph() . ', zzz']),
        ];
    }
}
