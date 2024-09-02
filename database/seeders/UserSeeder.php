<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'userID' => 'admin1',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'User',
                'userID' => 'user1',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => Hash::make('user')
            ],

        ]);
    }
}
