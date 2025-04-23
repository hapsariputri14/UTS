<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            [
                'nama' => 'Budi Santoso',
                'nim' => '2021001',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Ani Wijaya',
                'nim' => '2021002',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Dedi Kurniawan',
                'nim' => '2021003',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama' => 'Rina Fitriani',
                'nim' => '2021004',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama' => 'Eko Prasetyo',
                'nim' => '2021005',
                'jurusan' => 'Teknik Komputer',
            ],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}