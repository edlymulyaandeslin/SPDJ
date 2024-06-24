<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gejala::factory()->create([
            'kode_gejala' => 'G01',
            'name' => 'Ada bintik-bintik putih kekuningan dibawah permukaan kulit',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G02',
            'name' => 'Ada bintik-bintik dengan dasar kehitaman',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G03',
            'name' => 'Ada bintik-bintik kecil tanpa kemerahan',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G04',
            'name' => 'Ada bintik-bintik kecil didaerah kelenjar keringat seperti dahi, dagu dan hidung',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G05',
            'name' => 'Ada benjolan berwarna kemerahan tanpa nanah',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G06',
            'name' => 'Ada benjolan berwarna kemerahan dengan bagian tengah putih (nanah)',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G07',
            'name' => 'Benjolan berwarna kemerahan berisi nanah',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G08',
            'name' => 'Benjolan berwarna sama dengan kulit atau kemerahan',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G09',
            'name' => 'Benjolan terasa keras dan padat',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G10',
            'name' => 'Benjolan terasa keras dan padat dibawah kulit',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G11',
            'name' => 'Jerawat dengan ukuran benjolan kecil < 1 cm',
        ]);

        Gejala::factory()->create([
            'kode_gejala' => 'G12',
            'name' => 'Jerawat dengan ukuran benjolan besar > 1 cm',
        ]);
        Gejala::factory()->create([
            'kode_gejala' => 'G13',
            'name' => 'Radang (kemerahan) disekitar benjolan',
        ]);
        Gejala::factory()->create([
            'kode_gejala' => 'G14',
            'name' => 'Ketika jerawat disentuh terasa sakit',
        ]);
        Gejala::factory()->create([
            'kode_gejala' => 'G15',
            'name' => 'Terasa nyeri',
        ]);
    }
}
