<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Illness;

class MalSeeder extends Seeder
{
    public function run()
    {
        // Maux
        $mal_de_tete = Illness::create(['nom' => 'Maux de tête']);
        $mal_de_ventre = Illness::create(['nom' => 'Maux de ventre']);
        $douleur_dentaire = Illness::create(['nom' => 'Douleur dentaire']);
        $douleur_articulaire = Illness::create(['nom' => 'Douleur articulaire']);
        $douleur_musculaire = Illness::create(['nom' => 'Douleur musculaire']);
    }
}
