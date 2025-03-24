<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // Tạo đơn hàng cho 10 user đầu tiên
        $users = User::take(10)->get();

        foreach ($users as $user) {
            Order::factory()->create([
                'user_id' => $user->id,
                'status' => 'pending',
            ]);
        }
    }

}
