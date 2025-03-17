<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => $faker->word, // Tên sản phẩm ngẫu nhiên
                'description' => $faker->sentence, // Mô tả sản phẩm
                'price' => $faker->randomFloat(2, 10, 1000), // Giá từ 10 - 1000$
                'quantity' => $faker->numberBetween(1, 100), // Số lượng từ 1 - 100
            ]);
        }
    }
}
