<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            KategoriSeeder::class,
            JenisAyamSeeder::class,
            AyamSeeder::class,
            ImageSeeder::class,
            KontakSeeder::class,
            BeritaSeeder::class,
        ]);
    }
}
