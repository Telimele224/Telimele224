<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Illness;

class MalSeeder extends Seeder
{
    public function run()
    {
        // Maux
        Illness::updateOrCreate(['nom' => 'Maux de tête']);
        Illness::updateOrCreate(['nom' => 'Maux de ventre']);
        Illness::updateOrCreate(['nom' => 'Douleur dentaire']);
        Illness::updateOrCreate(['nom' => 'Douleur articulaire']);
        Illness::updateOrCreate(['nom' => 'Douleur musculaire']);
    }
}
