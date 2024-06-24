<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penyakit>
 */
class PenyakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_penyakit' => 'P' . fake()->randomNumber(2, true),
            'name' => 'Penyakit ' . $this->faker->word,
            'definisi' => $this->faker->sentence,
            'penyebab' => $this->faker->sentence,
            'solusi' => $this->faker->sentence
        ];
    }
}
