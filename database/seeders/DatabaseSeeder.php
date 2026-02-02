<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'email' => 'liturtara@gmail.com',
            'password' => Hash::make('liturtara123'),
            'role' => 'superadmin',
            'phone_number' => '081234567890',
            'is_verified' => 1,
        ]);

        // $this->call([
        //     ReviewerRequestSeeder::class,
        // ]);
    }
}
