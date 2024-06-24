<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssessmentRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => $this->faker->randomNumber(8),
            'name' => $this->faker->name(),
            'faculty' => $this->faker->word(),
            'department' => $this->faker->word(),
            'semester' => $this->faker->randomElement([6, 7, 8]),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'nik' => $this->faker->randomNumber(16),
            'address' => $this->faker->address(),
            'postalCode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'lastEducation' => $this->faker->word(),
            'email' => $this->faker->email(),
            'mobile' => $this->faker->phoneNumber(),
            'scheme_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),

            'telephone' => $this->faker->phoneNumber(),
            'officeTelephone' => $this->faker->phoneNumber(),
            'company' => $this->faker->word(),
            'position' => $this->faker->word(),
            'officeAddress' => $this->faker->address(),
            'officePostalCode' => $this->faker->postcode(),
            'fax' => $this->faker->phoneNumber(),
            'officeEmail' => $this->faker->email(),

            'registeredAt' => $this->faker->dateTimeBetween('-1 years', 'now'),

            'periodYear' => $this->faker->year(),
            'periodSemester' => $this->faker->randomElement(['Gasal', 'Genap']),

            'ijazah' => $this->faker->word(),
            'transkrip' => $this->faker->word(),
            'idCard' => $this->faker->word(),
            'foto' => $this->faker->word(),
        ];
    }
}
