<?php

namespace Database\Seeders;

use App\Http\Controllers\Api\SpecialityController;
use App\Models\Hospital;
use App\Models\Insurance;
use App\Models\Speciality;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Hospital::factory(5)->create();
        Speciality::factory(5)->create();
        Insurance::factory(5)->hasPatients()->create();

    }
}
