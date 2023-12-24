<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'     => fake()->text(25),
            'tanggal'   => fake()->date(),
            'isi'       => fake()->text(100),
            'foto'      => fake()->imageUrl()
        ];
    }
}