<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\Airports;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory(5)->create();
        User::factory(50)->create();
        Airline::factory(30)->create();
        Airports::factory(40)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
