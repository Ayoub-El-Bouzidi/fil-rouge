<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Salle;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salle::create([
            'nom' => 'Salle A101',
            'capacite' => 30,
            'description' => 'Salle équipée avec projecteur',
        ]);

        Salle::create([
            'nom' => 'Salle B202',
            'capacite' => 25,
            'description' => 'Salle informatique avec 20 postes',
        ]);
    }
}
