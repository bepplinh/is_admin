<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItems>
 */
class CartItemsFactory extends Factory
{
    protected $model = CartItems::class;

    public function definition()
    {
        $cartIds = Cart::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();

        return [
            'cart_id' => $this->faker->randomElement($cartIds) ?? Cart::factory(),
            'product_id' => $this->faker->randomElement($productIds) ?? Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
