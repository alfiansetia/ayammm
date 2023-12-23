<?php

namespace Database\Seeders;

use App\Models\Ayam;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ayam = Ayam::all();
        foreach ($ayam as $key => $value) {
            Image::factory(5)->create([
                'ayam_id' => $value->id
            ]);
        }
    }
}
