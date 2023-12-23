<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::factory()->create();
    }
}
