<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CandidateAccession>
 */
class AccessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registrationNumber' => $this->faker->ean13(),
            'registeredAt' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'periodYear' => $this->faker->year() . '/' . $this->faker->year(),
            'periodSemester' => $this->faker->randomElement(['Gasal', 'Genap']),

            'name' => $this->faker->name(),
            'nim' => $this->faker->ean13(),
            'semester' => $this->faker->randomElement([6, 7, 8]),
            'faculty' => $this->faker->word(),
            'department' => $this->faker->word(),

            'nik' => $this->faker->ean13(),
            'birthPlace' => $this->faker->city(),
            'birthDate' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'lastEducation' => $this->faker->randomElement(['SMA/SMK', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3']),
            'mobile' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'scheme_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),

            // 'postalCode' => $this->faker->postcode(),
            // 'telephone' => $this->faker->phoneNumber(),
            // 'officeTelephone' => $this->faker->phoneNumber(),
            // 'company' => $this->faker->word(),
            // 'position' => $this->faker->word(),
            // 'officeAddress' => $this->faker->address(),
            // 'officePostalCode' => $this->faker->postcode(),
            // 'fax' => $this->faker->phoneNumber(),
            // 'officeEmail' => $this->faker->email(),

            'ijazah' => $this->faker->imageUrl(),
            'transkrip' => $this->faker->imageUrl(),
            'ktp' => $this->faker->imageUrl(),
            'ktm' => $this->faker->imageUrl(),
            'foto' => $this->faker->imageUrl(),
            'cv' => $this->faker->imageUrl(),
            'proofPayment' => $this->faker->imageUrl(),
            'supportingCertificate' => $this->faker->imageUrl(),

            // 'verified' => $this->faker->randomElement([true, false]),
            // 'verifiedAt' => $this->faker->dateTimeBetween('-1 years', 'now'),
            // 'assessor_id' => $this->faker->numberBetween(1, 50),
            // 'selfAssessmentSchedule' => $this->faker->dateTimeBetween('now', '+1 years'),

            // 'recommended' => $this->faker->randomElement([true, false]),
            // 'recommendedAt' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
