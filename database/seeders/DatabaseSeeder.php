<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Element;
use App\Models\Kuk;
use App\Models\Scheme;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i = 0; $i < rand(87, 132); $i++) {
            Scheme::factory(1)
                ->has(
                    Unit::factory(rand(3, 6))
                        ->has(
                            Element::factory(rand(3, 6))
                                ->has(
                                    Kuk::factory(rand(3, 6))
                                )
                        )
                )
                ->create();
        }
    }
}
