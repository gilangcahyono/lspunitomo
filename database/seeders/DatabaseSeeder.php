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

        Scheme::factory(20)
            ->has(
                Unit::factory(rand(1, 5))
                    ->has(
                        Element::factory(rand(1, 5))
                            ->has(
                                Kuk::factory(rand(1, 5))
                            )
                    )
            )
            ->create();
    }
}
