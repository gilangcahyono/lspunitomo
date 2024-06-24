<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessor>
 */
class AssessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'metRegistrationNumber' => fake()->ean13(),
            'occupation' => fake()->sentence(rand(1, 2)),
            'technicalCompetence' => fake()->sentence(),
            'tmtMet' => fake()->date(),
            'expiredMet' => fake()->date(),
            'rcc' => fake()->date(),
            'expiredRcc' => fake()->date(),
            'statusMet' => fake()->randomElement(['Berlaku', 'Tidak Berlaku']),
            'nidn' => fake()->isbn10(),
            'name' => fake()->name(),
            'nik' => fake()->numberBetween(1000000000000000, 9999999999999999),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'birthPlace' => fake()->city(),
            'birthDate' => fake()->date(),
            'citizen' => fake()->city(),
            'lastEducation' => fake()->sentence(),
            'address' => fake()->address(),
            'neighbourhood' => fake()->randomElement(['02/03', '02/04', '02/05', '02/06']),
            'village' => fake()->state(),
            'district' => fake()->state(),
            'city' => fake()->city(),
            'province' => fake()->state(),
            'postalCode' => fake()->numberBetween(10000, 99999),
            'department' => fake()->randomElement(['Teknik Informatika', 'Teknik Geomatika', 'Ilmu Komunikasi Sosial', 'Ilmu Pariwisata', 'Ilmu Kesehatan', 'Ekonomi', 'Ilmu Administrasi Negara', 'Ilmu Hukum', null]),
            'telephone' => fake()->phoneNumber(),
            'mobile' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'scheme_id' => fake()->randomDigitNotNull(),
            'user_id' => fake()->randomDigitNotNull(),
        ];
    }
}
