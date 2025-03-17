<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = new User;
        $user->username = 'admin';
        $user->password = bcrypt('123');
        $user->is_admin = True;
        $user->save();
    }
}
