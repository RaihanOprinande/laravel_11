<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        \App\Models\Prodi::create([
            'nama'=> 'Manajemen Informatika',
        ]);
        \App\Models\Prodi::create([
            'nama'=> 'Teknik Komputer',
        ]);
        \App\Models\Prodi::create([
            'nama'=> 'Listrik Zeus',
        ]);

        Jabatan::create([
            'kode_jabatan'=> 'A-001',
            'nama_jabatan'=> 'Asisten Ahli',
            'keterangan' => 'Asisten Ahli'
        ]);
        Jabatan::create([
            'kode_jabatan'=> 'A-002',
            'nama_jabatan'=> 'Lektor',
            'keterangan' => 'Lektor'
        ]);
        Jabatan::create([
            'kode_jabatan'=> 'A-003',
            'nama_jabatan'=> 'Lektor Kepala',
            'keterangan' => 'Lektor Kepala'
        ]);
        Jabatan::create([
            'kode_jabatan'=> 'A-004',
            'nama_jabatan'=> 'Guru Besar',
            'keterangan' => 'Guru Besar'
        ]);




        \App\Models\Dosen::factory(20)->create();

        \App\Models\Mahasiswa::factory(20)->create();

        // Jabatan::factory(4)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
