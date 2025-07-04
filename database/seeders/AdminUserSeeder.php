<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::updateOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin Swa Buana',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // User biasa
        User::updateOrCreate([
            'email' => 'user@example.com',
        ], [
            'name' => 'User Biasa',
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
    }
}
