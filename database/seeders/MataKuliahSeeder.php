<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataKuliahs = [
            [
                'nama' => 'Pemrograman Web Lanjut',
                'sks' => 3,
            ],
            [
                'nama' => 'Basis Data',
                'sks' => 4,
            ],
            [
                'nama' => 'Algoritma dan Struktur Data',
                'sks' => 4,
            ],
            [
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
            ],
            [
                'nama' => 'Sistem Operasi',
                'sks' => 3,
            ],
        ];

        foreach ($mataKuliahs as $mataKuliah) {
            MataKuliah::create($mataKuliah);
        }
    }
}