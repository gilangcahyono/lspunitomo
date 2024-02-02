<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Element;
use App\Models\Kuk;
use App\Models\Skema;
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

        Skema::factory(20)
            ->has(
                Unit::factory(10)
                    ->has(
                        Element::factory(5)
                            ->has(
                                Kuk::factory(7)
                            )
                    )
            )
            ->create();
    }
}
