<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kota;
use App\Models\Maskapai;
use Illuminate\Database\Seeder;
use App\Models\Rute;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama_lengkap' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'nama_lengkap' => 'penumpang',
            'username' => 'penumpang',
            'password' => bcrypt('penumpang'),
            'role' => 'penumpang',
        ]);

        \App\Models\User::create([
            'nama_lengkap' => 'petugas',
            'username' => 'petugas',
            'password' => bcrypt('petugas'),
            'role' => 'petugas',
        ]);

        Maskapai::create([
            'nama_maskapai' => 'Garuda',
            'logo_maskapai' => 'logo.jpg',
            'kapasitas' => '200'
        ]);

        Maskapai::create([
            'nama_maskapai' => 'Garudi',
            'logo_maskapai' => 'logo.jpg',
            'kapasitas' => '200'
        ]);

        Kota::create([
            'nama_kota' => 'Jakarta',
        ]);

        Kota::create([
            'nama_kota' => 'Bali',
        ]);

        Rute::create([
            'maskapai_id' => 1,
            'rute_asal' => 'Jakarta',
            'rute_tujuan' => 'Bali',
            'tanggal_pergi' => '2006-02-01',
        ]);
    }
}
