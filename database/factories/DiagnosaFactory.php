<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diagnosa>
 */
class DiagnosaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'penyakit_id' => fake()->numberBetween(1, 5),
            'pilihan_gejala' => 'not',
            'persentase_hasil' => 80
        ];
    }
}
