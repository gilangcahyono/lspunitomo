<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Accession;
use App\Models\Assessor;
use App\Models\Element;
use App\Models\Kuk;
use App\Models\Role;
use App\Models\Scheme;
use App\Models\Unit;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i <= 3; $i++) {
            Role::create([
                'id' => $i,
                'level' => $i,
            ]);
        }

        $user1 = User::create([
            'username' => '0712067201',
            'password' => '4734',
            'type' => 'internal',
        ]);

        UserRole::insert([
            [
                'role_id' => 1,
                'user_id' => $user1['id'],
            ]
        ]);

        // User::factory(50)->create();

        // UserRole::factory(50)->create();

        // Assessor::create([
        //     'metRegistrationNumber' => fake()->ean13(),
        //     'occupation' => 'Dosen',
        //     'technicalCompetence' => fake()->sentence(),
        //     'tmtMet' => fake()->date(),
        //     'expiredMet' => fake()->date(),
        //     'rcc' => fake()->date(),
        //     'expiredRcc' => fake()->date(),
        //     'statusMet' => fake()->randomElement(['Berlaku', 'Tidak Berlaku']),
        //     'nidn' => '0712067201',
        //     'name' => 'Lambang Probo Sumirat, S.Kom, M.Kom',
        //     'nik' => fake()->numberBetween(1000000000000000, 9999999999999999),
        //     'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        //     'birthPlace' => fake()->city(),
        //     'birthDate' => fake()->date(),
        //     'citizen' => fake()->city(),
        //     'lastEducation' => fake()->sentence(),
        //     'address' => fake()->address(),
        //     'neighbourhood' => fake()->randomElement(['02/03', '02/04', '02/05', '02/06']),
        //     'village' => fake()->state(),
        //     'district' => fake()->state(),
        //     'city' => fake()->city(),
        //     'province' => fake()->state(),
        //     'postalCode' => fake()->numberBetween(10000, 99999),
        //     'department' => 'Teknik Informatika',
        //     'telephone' => fake()->phoneNumber(),
        //     'mobile' => fake()->phoneNumber(),
        //     'email' => fake()->email(),
        //     'scheme_id' => 1,
        //     'user_id' => $user1['id'],
        // ]);


        Scheme::factory(10)
            ->has(
                Unit::factory(10)
                    ->has(
                        Element::factory(3)
                            ->has(
                                Kuk::factory(3)
                            )
                    )
            )
            ->create();

        Accession::factory(100)->create();
        Assessor::factory(40)->create();
    }
}
