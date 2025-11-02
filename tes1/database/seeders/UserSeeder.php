<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User admin contoh
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'), // password hash
        ]);

        // User biasa contoh
        User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@example.com',
            'password' => Hash::make('password'), // password hash
        ]);
    }
}
