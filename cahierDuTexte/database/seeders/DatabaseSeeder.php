<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            FormateurSeeder::class,
            ResponsableSeeder::class,
            ModuleSeeder::class,
            SeanceSeeder::class,
            GroupeSeeder::class,
        ]);
    }
}
