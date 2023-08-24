<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MerchSale;
use App\Models\User;
class MerchSalesTableSeeder extends Seeder
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
                MerchSale::create([
                    'user_id' => $user->id,
                'item_name' => $faker->word,
                'amount' => $faker->numberBetween(1, 10),
                'price' => $faker->randomFloat(2, 10, 100),
                'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
                'updated_at' => now(),
            ]);
        }
        }
    }
}
