<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Update the namespace as per your application structure
use Illuminate\Database\Eloquent\Factories\Factory; // Use the correct Factory namespace

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->count(1000)->create(); // Use the Factory class
    }
}

