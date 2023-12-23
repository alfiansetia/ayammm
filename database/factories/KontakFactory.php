<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kontak>
 */
class KontakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_telp'   => fake()->phoneNumber(),
            'email'     => fake()->email(),
            'facebook'  => 'facebook.com',
            'twiter'    => 'twitter.com',
            'instagram' => 'instagram.com',
            'alamat'    => fake()->address(),
        ];
    }
}
