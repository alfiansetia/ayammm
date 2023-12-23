<?php

namespace Database\Seeders;

use App\Models\JenisAyam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisAyamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisAyam::factory(10)->create();
    }
}
