<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word,
                'gia' => $faker->randomFloat(2, 10, 1000),
                'giakm' => $faker->randomFloat(2, 10, 1000),
                'mota' => $faker->sentence,
                'views' => $faker->numberBetween(1.100),



            ]);
        }
    }
}
