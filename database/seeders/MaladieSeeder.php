<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease;

class MaladieSeeder extends Seeder
{
    public function run()
    {
        // Maladies
        Disease::updateOrCreate(['nom' => 'Grippe']);
        Disease::updateOrCreate(['nom' => 'Diabète de type 2']);
        Disease::updateOrCreate(['nom' => 'Pneumonie']);
        Disease::updateOrCreate(['nom' => 'Hypertension artérielle']);
        Disease::updateOrCreate(['nom' => 'Asthme']);
        Disease::updateOrCreate(['nom' => 'Migraines']);
        Disease::updateOrCreate(['nom' => 'Maladie coeliaque']);
        Disease::updateOrCreate(['nom' => 'Bronchites']);
        Disease::updateOrCreate(['nom' => 'Gastrite']);
    }
}
