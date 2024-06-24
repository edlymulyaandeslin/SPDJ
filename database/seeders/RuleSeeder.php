<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rule::create([
            'penyakit_id' => 1,
            'gejala_id' => 1,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 1,
            'gejala_id' => 4,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 1,
            'gejala_id' => 3,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 2,
            'gejala_id' => 3,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 2,
            'gejala_id' => 2,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 2,
            'gejala_id' => 4,
            'cf_pakar' => 0.6
        ]);
        Rule::create([
            'penyakit_id' => 3,
            'gejala_id' => 5,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 3,
            'gejala_id' => 9,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 3,
            'gejala_id' => 11,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 3,
            'gejala_id' => 14,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 4,
            'gejala_id' => 6,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 4,
            'gejala_id' => 13,
            'cf_pakar' => 0.6
        ]);
        Rule::create([
            'penyakit_id' => 4,
            'gejala_id' => 11,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 4,
            'gejala_id' => 14,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 10,
            'cf_pakar' => 0.6
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 8,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 13,
            'cf_pakar' => 0.6
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 12,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 14,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 5,
            'gejala_id' => 15,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 6,
            'gejala_id' => 7,
            'cf_pakar' => 0.8
        ]);
        Rule::create([
            'penyakit_id' => 6,
            'gejala_id' => 9,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 6,
            'gejala_id' => 12,
            'cf_pakar' => 0.4
        ]);
        Rule::create([
            'penyakit_id' => 6,
            'gejala_id' => 14,
            'cf_pakar' => 0.6
        ]);
        Rule::create([
            'penyakit_id' => 6,
            'gejala_id' => 15,
            'cf_pakar' => 0.8
        ]);
    }
}
