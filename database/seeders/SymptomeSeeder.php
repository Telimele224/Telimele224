<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symptom;

class SymptomeSeeder extends Seeder
{
    public function run()
    {
        // Symptômes
        Symptom::updateOrCreate(['nom' => 'Fièvre']);
        Symptom::updateOrCreate(['nom' => 'Douleur abdominale']);
        Symptom::updateOrCreate(['nom' => 'Toux persistante']);
        Symptom::updateOrCreate(['nom' => 'Fatigue extrême']);
        Symptom::updateOrCreate(['nom' => 'Douleur thoracique']);
    }
}
