<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create(['name' => 'admin', 'description' => 'Administrator']);
        Role::create(['name' => 'dokter', 'description' => 'Dokter']);
        Role::create(['name' => 'perawat', 'description' => 'Perawat']);
        Role::create(['name' => 'apoteker', 'description' => 'Apoteker']);
        Role::create(['name' => 'petugas pendaftaran', 'description' => 'Petugas Pendaftaran']);
        Role::create(['name' => 'petugas laboratorium', 'description' => 'Petugas Laboratorium']);
        Role::create(['name' => 'manajer keuangan', 'description' => 'Manajer Keuangan']);
        Role::create(['name' => 'pasien', 'description' => 'Pasien']);
    }
}
