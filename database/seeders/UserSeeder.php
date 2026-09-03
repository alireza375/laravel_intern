<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Sarah Smith',
            'email' => 'sarah@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Michael Brown',
            'email' => 'michael@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'David Wilson',
            'email' => 'david@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
