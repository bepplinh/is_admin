<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition()
    {
        $userIds = User::pluck('id')->toArray(); // Lấy danh sách user_id từ DB

        return [
            'user_id' => $this->faker->randomElement($userIds) ?? User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

