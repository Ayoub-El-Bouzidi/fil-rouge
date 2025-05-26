<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Formateur;

use App\Models\Module;
use App\Models\Seance;
use App\Models\Session;

class SeanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $formateur = Formateur::first();
        $module = Module::first();

        Seance::create([
            'date' => now()->toDateString(),
            'heure_debut' => '10:00:00',
            'heure_fin' => '12:00:00',
            'duree' => 120,
            'etat_validation' => 'en attente',
            'formateur_id' => $formateur->id,
            'module_id' => $module->id,
        ]);
    }
}
