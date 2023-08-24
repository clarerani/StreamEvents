<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Donation;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        
        $users = User::all(); // Assuming you have users already created

        foreach ($users as $user) {
            foreach (range(1, 300) as $index) {
                Donation::create([
                    'user_id' => $user->id,
                    'amount' => $faker->randomFloat(2, 1, 1000),
                'currency' => $faker->currencyCode,
                'donation_message' => $faker->sentence,
                    'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
                    'updated_at' => now(),
                ]);
            }
        }
      
    }
}
