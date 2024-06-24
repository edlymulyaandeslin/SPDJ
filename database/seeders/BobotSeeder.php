<?php

namespace Database\Seeders;

use App\Models\Bobot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BobotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bobot::factory()->create([
            'pilihan' => 'Tidak',
            'bobot_nilai' => 0
        ]);
        Bobot::factory()->create([
            'pilihan' => 'Tidak Tahu',
            'bobot_nilai' => 0.2
        ]);
        Bobot::factory()->create([
            'pilihan' => 'Mungkin',
            'bobot_nilai' => 0.4
        ]);
        Bobot::factory()->create([
            'pilihan' => 'Kemungkinan Besar',
            'bobot_nilai' => 0.6
        ]);
        Bobot::factory()->create([
            'pilihan' => 'Hampir Pasti',
            'bobot_nilai' => 0.8
        ]);
        Bobot::factory()->create([
            'pilihan' => 'Pasti',
            'bobot_nilai' => 1
        ]);
    }
}
