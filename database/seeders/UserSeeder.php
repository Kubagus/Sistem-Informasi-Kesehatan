<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role_id' => 1, // Admin
        ]);

        User::create([
            'name' => 'Dokter User',
            'email' => 'dokter@example.com',
            'password' => Hash::make('password'),
            'role_id' => 2, // Dokter
        ]);

        User::create([
            'name' => 'Perawat User',
            'email' => 'perawat@example.com',
            'password' => Hash::make('password'),
            'role_id' => 3, // Perawat
        ]);

        User::create([
            'name' => 'Apoteker User',
            'email' => 'apoteker@example.com',
            'password' => Hash::make('password'),
            'role_id' => 4, // Apoteker
        ]);
    }
}
