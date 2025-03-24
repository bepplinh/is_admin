<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemsFactory extends Factory
{
    protected $model = OrderItems::class;

    public function definition()
    {
        $orderIds = Order::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();

        return [
            'order_id' => $this->faker->randomElement($orderIds) ?? Order::factory(),
            'product_id' => $this->faker->randomElement($productIds) ?? Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}

