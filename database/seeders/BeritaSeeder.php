<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (file_exists(public_path('berita'))) {
            File::cleanDirectory(public_path('berita'));
        }
        Berita::factory(10)->create([
            'user_id' => 1
        ]);
    }
}
