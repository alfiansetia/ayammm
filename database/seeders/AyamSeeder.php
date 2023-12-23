<?php

namespace Database\Seeders;

use App\Models\Ayam;
use App\Models\JenisAyam;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AyamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = Kategori::all();
        $jenis = JenisAyam::all();
        for ($i = 0; $i < 20; $i++) {
            Ayam::factory()->create([
                'kategori_id'   => $kategori->random()->id,
                'jenis_ayam_id' => $jenis->random()->id,
            ]);
        }
    }
}
