<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscriber;
use App\Models\User;
class SubscribersTableSeeder extends Seeder
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
                Subscriber::create([
                    'user_id' => $user->id,
                'name' => $faker->userName,
                'subscription_tier' => $faker->numberBetween(1, 3),
                'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
                'updated_at' => now(),
            ]);
        }
        }
    }
}