<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Nilai;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = Mahasiswa::all();
        $mataKuliahs = MataKuliah::all();
        
        // Untuk setiap mahasiswa, buat nilai untuk setiap mata kuliah
        foreach ($mahasiswas as $mahasiswa) {
            foreach ($mataKuliahs as $mataKuliah) {
                // Generate random nilai between 60 and 100
                $nilai = rand(60, 100);
                
                Nilai::create([
                    'mahasiswa_id' => $mahasiswa->id,
                    'mata_kuliah_id' => $mataKuliah->id,
                    'nilai' => $nilai,
                ]);
            }
        }
    }
}