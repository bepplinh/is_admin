<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItems;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartItemSeeder extends Seeder
{
    public function run()
    {
        CartItems::factory(30)->create();
    }
}
