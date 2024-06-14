<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Illness;
use App\Models\Symptom;
use App\Models\Disease;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Récupération des maux
        $mal_de_tete = Illness::where('nom', 'Maux de tête')->first();
        $mal_de_ventre = Illness::where('nom', 'Maux de ventre')->first();
        $douleur_dentaire = Illness::where('nom', 'Douleur dentaire')->first();
        $douleur_articulaire = Illness::where('nom', 'Douleur articulaire')->first();
        $douleur_musculaire = Illness::where('nom', 'Douleur musculaire')->first();

        // Récupération des symptômes
        $fievre = Symptom::where('nom', 'Fièvre')->first();
        $douleur_abdominale = Symptom::where('nom', 'Douleur abdominale')->first();
        $toux_persistante = Symptom::where('nom', 'Toux persistante')->first();
        $fatigue_extreme = Symptom::where('nom', 'Fatigue extrême')->first();
        $douleur_thoracique = Symptom::where('nom', 'Douleur thoracique')->first();

        // Récupération des maladies
        $grippe = Disease::where('nom', 'Grippe')->first();
        $diabete = Disease::where('nom', 'Diabète de type 2')->first();
        $pneumonie = Disease::where('nom', 'Pneumonie')->first();
        $hypertension = Disease::where('nom', 'Hypertension artérielle')->first();
        $asthme = Disease::where('nom', 'Asthme')->first();
        $migraines = Disease::where('nom', 'Migraines')->first();
        $maladie_coeliaque = Disease::where('nom', 'Maladie coeliaque')->first();
        $bronchites = Disease::where('nom', 'Bronchites')->first();
        $gastrite = Disease::where('nom', 'Gastrite')->first();

        // Création des services avec leurs relations
        Service::create([
            'nom' => 'Diabétologie',
            'description' => 'Notre service de diabétologie s\'engage à fournir une prise en charge complète du diabète, de la prévention au traitement. Avec une approche holistique, notre équipe de spécialistes travaille en étroite collaboration avec chaque patient pour élaborer des plans de traitement personnalisés, incluant la gestion de la glycémie, la nutrition, l\'exercice et les médicaments lorsque nécessaire. Nous vous offrons les outils et les ressources nécessaires pour prendre le contrôle de votre santé et vivre pleinement, en dépit du diabète.'
        ])->diseases()->attach([$diabete->id]);

        Service::create([
            'nom' => 'Néonatalogie',
            'description' => 'Notre service de néonatalogie est spécialisé dans les soins des nouveau-nés prématurés ou gravement malades. Avec une équipe multidisciplinaire de professionnels de la santé, nous offrons une surveillance et des soins intensifs 24 heures sur 24 pour assurer le bien-être des bébés les plus fragiles. Nous comprenons l\'importance de ces premiers jours de vie et nous nous engageons à fournir un soutien et des soins de la plus haute qualité à chaque nouveau-né et à sa famille.'
        ])->symptoms()->attach([$fievre->id]);

        Service::create([
            'nom' => 'Maternité',
            'description' => 'Notre service de maternité est dédié à offrir des soins complets et attentionnés aux femmes enceintes et à leurs bébés, du suivi prénatal à l\'accouchement et aux soins postnataux. Avec une équipe de professionnels de la santé expérimentés et des installations modernes, nous nous engageons à offrir une expérience de maternité sûre et confortable pour chaque famille. Vous pouvez avoir confiance en notre expertise pour vous accompagner à chaque étape de votre voyage vers la parentalité.'
        ])->illnesses()->attach([$douleur_articulaire->id, $douleur_musculaire->id]);

        Service::create([
            'nom' => 'Médecine Générale',
            'description' => 'Notre service de médecine générale offre des soins de première ligne complets pour toute la famille, de la pédiatrie à la gériatrie. Avec une équipe de médecins généralistes expérimentés, nous proposons des consultations, des examens de santé, des vaccinations et une prise en charge des maladies courantes. Vous pouvez avoir confiance en notre engagement à vous offrir des soins de qualité et à vous accompagner dans la gestion de votre santé à long terme.'
        ])->illnesses()->attach([$mal_de_tete->id]);

        Service::create([
            'nom' => 'Chirurgie',
            'description' => 'Notre service de chirurgie propose une gamme complète d\'interventions chirurgicales, allant des procédures courantes aux opérations complexes. Avec une équipe de chirurgiens hautement qualifiés et expérimentés, ainsi que des installations modernes, nous sommes déterminés à fournir des soins chirurgicaux de la plus haute qualité dans un environnement sûr et confortable. Vous pouvez avoir confiance en notre expertise et en notre engagement à vous offrir les meilleurs résultats possibles, tout en veillant à votre confort et à votre bien-être tout au long du processus.'
        ])->illnesses()->attach([$douleur_dentaire->id, $douleur_musculaire->id]);

        Service::create([
            'nom' => 'Pédiatrie',
            'description' => 'Notre service de pédiatrie est dédié à offrir des soins attentionnés et complets aux enfants de tous âges, de la naissance à l\'adolescence. Avec une équipe de pédiatres expérimentés et attentionnés, nous nous engageons à fournir des soins de haute qualité dans un environnement accueillant et rassurant. Que ce soit pour les visites de routine, les vaccinations, les maladies infantiles ou les problèmes de croissance et de développement, vous pouvez avoir confiance en notre expertise pour prendre soin de votre enfant.'
        ])->illnesses()->attach([$mal_de_ventre->id]);

        Service::create([
            'nom' => 'Urgence',
            'description' => 'Conçu pour fonctionner 24 heures sur 24 et 7 jours sur 7, le service des urgences de l\'Hôpital Régional de Labé assure une disponibilité continue des soins médicaux pour répondre aux besoins des patients à tout moment. Son équipe médicale, composée de médecins urgentistes, d\'infirmiers spécialisés et de techniciens médicaux d\'urgence, est formée pour évaluer rapidement les patients, stabiliser les situations critiques et fournir les traitements appropriés dans des délais serrés.'
        ])->symptoms()->attach([$douleur_thoracique->id, $fatigue_extreme->id]);

        Service::create([
            'nom' => 'Cardiologie',
            'description' => 'Notre service de cardiologie offre une expertise de pointe dans le diagnostic et le traitement des maladies cardiaques, y compris les maladies coronariennes, les arythmies, les maladies valvulaires et bien plus encore. Avec une équipe de cardiologues expérimentés et des équipements de pointe, nous proposons une gamme complète de services, de la consultation initiale aux interventions chirurgicales avancées. Vous pouvez avoir confiance en notre engagement à protéger la santé de votre cœur et à améliorer votre qualité de vie.'
        ])->diseases()->attach([$hypertension->id]);

        Service::create([
            'nom' => 'Pneumologie',
            'description' => 'Notre service de pneumologie est spécialisé dans le diagnostic et le traitement des maladies respiratoires, telles que l\'asthme, la bronchite, la pneumonie et la maladie pulmonaire obstructive chronique (MPOC). Avec une équipe de pneumologues expérimentés et des équipements de pointe, nous offrons des soins complets pour améliorer la qualité de vie de nos patients.'
        ])->diseases()->attach([$pneumonie->id, $asthme->id]);

        Service::create([
            'nom' => 'Gastro-entérologie',
            'description' => 'Notre service de gastro-entérologie est spécialisé dans le diagnostic et le traitement des troubles digestifs, y compris la gastrite, la maladie coeliaque et les maladies inflammatoires de l\'intestin. Avec une équipe de gastro-entérologues expérimentés et des techniques diagnostiques avancées, nous nous engageons à fournir des soins de haute qualité pour améliorer la santé digestive de nos patients.'
        ])->symptoms()->attach([$douleur_abdominale->id, $fatigue_extreme->id]);

        Service::create([
            'nom' => 'Neurologie',
            'description' => 'Notre service de neurologie offre une expertise dans le diagnostic et le traitement des troubles neurologiques, y compris les migraines, les épilepsies et les maladies neurodégénératives. Avec une équipe de neurologues expérimentés et des équipements de pointe, nous fournissons des soins complets pour améliorer la qualité de vie de nos patients.'
        ])->diseases()->attach([$migraines->id]);
    }
}
