<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengisi 5 data task contoh
        Task::create([
            'user_id' => 1, // Asumsikan user dengan ID 1 ada
            'title' => 'Belajar Laravel',
            'description' => 'Pelajari routing, controller, dan API',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => 1, // Asumsikan user dengan ID 1 ada

            'title' => 'Belajar Vue.js',
            'description' => 'Membuat frontend SPA untuk API',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => 3, // Asumsikan user dengan ID 1 ada

            'title' => 'Membuat CRUD API',
            'description' => 'Buat endpoint GET, POST, PUT, DELETE',
            'is_completed' => true,
        ]);

        Task::create([
            'user_id' => 2, // Asumsikan user dengan ID 1 ada

            'title' => 'Testing API',
            'description' => 'Gunakan Postman untuk test semua endpoint',
            'is_completed' => false,
        ]);

        Task::create([
            'user_id' => 2, // Asumsikan user dengan ID 1 ada

            'title' => 'Deploy Project',
            'description' => 'Upload ke server atau hosting',
            'is_completed' => false,
        ]);
    }
}
