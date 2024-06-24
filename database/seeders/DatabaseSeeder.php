<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'role' => 'admin',
            'name' => 'Super',
            'email' => 'super@gmail.com',
        ]);
        User::factory()->create([
            'role' => 'user',
            'name' => 'Superlin',
            'email' => 'superlin@gmail.com',
        ]);

        $this->call(
            [
                PenyakitSeeder::class,
                GejalaSeeder::class,
                BobotSeeder::class,
                RuleSeeder::class,
                // DiagnosaSeeder::class,
            ]
        );
    }
}
