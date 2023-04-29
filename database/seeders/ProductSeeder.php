<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i<=50; $i++){
            $products = new Products;
            $products->name = $faker->name();
            $products->description = $faker->sentence();
            $products->price = $faker->randomFloat(2, 10, 100);
            $products->quantity = $faker->randomNumber(1);
            $products->save();
        }
    }
}
