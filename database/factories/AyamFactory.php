<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ayam>
 */
class AyamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode'      => strtoupper(Str::random(10)),
            'berat'     => fake()->randomDigitNotZero(),
            'status'    => 'Ready Stock',
            'usia'      => fake()->randomDigitNotZero(),
            'deskripsi' => fake()->text(150),
            'cover'     => fake()->imageUrl(),
        ];
    }
}
