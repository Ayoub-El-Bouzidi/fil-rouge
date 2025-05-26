<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use PHPUnit\Framework\Attributes\Group;
use App\Models\Groupe;


class GroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Groupe::create([
            'nom' => 'Groupe A',
        ]);
        Groupe::create([
            'nom' => 'Groupe B'
        ]);
    }
}
