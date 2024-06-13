<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Administrateurs;
use App\Models\Consultation;
use App\Models\Medecin;
use App\Models\Ordonance;
use App\Models\Patient;
use App\Models\Personnel;
use App\Models\Rdv;
use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public function redirect() {
        if (Auth::id()) {
            $user = Auth::user();

            if ($user->statut == '1') {
                switch ($user->role) {
                    case 'patient':
                        $patientId = $user->patient->id;
                        //Compter les nombre d'actualité dans la table
                        $actualite_count = Actualite::count();
                        // Compter le nombre de medecins dans la blade
                        $medecin_count = Medecin::count();
                        // Compter les ordonnances prescrites pour le patient
                        $ordonnances_count = Ordonance::whereHas('consultation.rdv.patient', function($query) use ($patientId) {
                            $query->where('id', $patientId);
                        })->count();
                        // Compter les témoignages du patient
                        $temoignages_count = Temoignage::where('user_id', $user->id)->count();

                        // Récupérer les rendez-vous du patient
                        $rendezVous = Rdv::where('id_patient', $patientId)->get();
                        $rendezVousAcceptes = $rendezVous->where('statut', 'accepté');
                        $rendezVousRejettes = $rendezVous->where('statut', 'annulé');
                        $rendezVousEnAttente = $rendezVous->where('statut', 'en_attente');

                        // Compter les dossiers médicaux du patient
                        $consultations = Consultation::whereHas('rdv.patient', function($query) use ($patientId) {
                            $query->where('id', $patientId);
                        })->get();
                        $dossier_count = $consultations->count();

                        return view('patients.home', [
                            'rendezVous' => $rendezVous,
                            'rendezVousAcceptes' => $rendezVousAcceptes,
                            'rendezVousRejettes' => $rendezVousRejettes,
                            'rendezVousEnAttente' => $rendezVousEnAttente,
                            'temoignages_count' => $temoignages_count,
                            'dossier_count' => $dossier_count,
                            'actualite_count'=>$actualite_count,
                            'ordonnances_count' => $ordonnances_count,
                            'medecin_count'=>$medecin_count
                        ]);

                    case 'admin':
                        $personnelcountAdmin = Personnel::all();
                        // Compter le nombre de medecin
                        $medecincountMedecinAdmin = Medecin::all();
                        $rdvAdmin = Rdv::where('statut', ['accepté', 'consulté'])
                        ->get();

                        $serviceAdmin = Service::all();
                        $administrateur = Administrateurs::all();
                        $temoignageAdmin = Temoignage::all();
                        $patientAdmin = Patient::all();
                        $ordonnceAdmin =Ordonance::all();
                        $consultationAdmin = Consultation::all();
                        return view('admin.home',[
                            'personnelcountAdmin'=>$personnelcountAdmin,
                            'medecincountMedecinAdmin'=>$medecincountMedecinAdmin,
                            'rdvAdmin'=>$rdvAdmin,
                            'serviceAdmin'=>$serviceAdmin,
                            'administrateur'=>$administrateur,
                            'temoignageAdmin'=>$temoignageAdmin,
                            'patientAdmin'=>$patientAdmin,
                            'ordonnceAdmin'=>$ordonnceAdmin,
                            'consultationAdmin'=>$consultationAdmin,

                        ]);
                        case 'superadmin':
                            $personnelcountAdmin = Personnel::all();
                            // Compter le nombre de medecin
                            $medecincountMedecinAdmin = Medecin::all();
                            $rdvAdmin = Rdv::where('statut', ['accepté', 'consulté'])
                            ->get();

                            $serviceAdmin = Service::all();
                            $administrateur = Administrateurs::all();
                            $temoignageAdmin = Temoignage::all();
                            $patientAdmin = Patient::all();
                            $ordonnceAdmin =Ordonance::all();
                            $consultationAdmin = Consultation::all();
                            return view('admin.home',[
                                'personnelcountAdmin'=>$personnelcountAdmin,
                                'medecincountMedecinAdmin'=>$medecincountMedecinAdmin,
                                'rdvAdmin'=>$rdvAdmin,
                                'serviceAdmin'=>$serviceAdmin,
                                'administrateur'=>$administrateur,
                                'temoignageAdmin'=>$temoignageAdmin,
                                'patientAdmin'=>$patientAdmin,
                                'ordonnceAdmin'=>$ordonnceAdmin,
                                'consultationAdmin'=>$consultationAdmin,

                            ]);


                    case 'medecin':
                        // Recuperation de l'identifiant du medecin
                        $medecinId = $user->medecin->id;
                        // Recuperer tous les rdv concernant le medecin
                        $rendezVousMedecin = Rdv::where('id_medecin', $medecinId)->get();

                        $rendezVousAcceptesMedecin = $rendezVousMedecin->where('statut', 'accepté');
                        $rendezVousRejettesMedecin = $rendezVousMedecin->where('statut', 'annulé');
                        $rendezVousEnAttenteMedecin = $rendezVousMedecin->where('statut', 'en_attente');

                       // Compter le nombre de patients que le docteur a consultés
                        $patientCountMedecin = Consultation::whereHas('rdv.medecin', function($query) use ($medecinId) {
                            $query->where('id', $medecinId);
                        })->get();
                        $dossier_count = $patientCountMedecin->count();
                        // Compter le nombre de consultation
                        $consultationsCount = Consultation::whereHas('rdv', function($query) use ($medecinId) {
                            $query->where('id_medecin', $medecinId);
                        })->count();
                        // Compter le nombre de personnel
                        $personnelcount = Personnel::all();
                        // Compter le nombre de medecin
                        $medecincountMedecin = Medecin::all();

                        return view('medecins.home',[
                            'rendezVousMedecin' => $rendezVousMedecin,
                            'rendezVousAcceptesMedecin' => $rendezVousAcceptesMedecin,
                            'rendezVousRejettesMedecin' => $rendezVousRejettesMedecin,
                            'rendezVousEnAttenteMedecin' => $rendezVousEnAttenteMedecin,
                            'patientCountMedecin'=>$patientCountMedecin,
                            'consultationsCount'=>$consultationsCount,
                            'personnelcount'=> $personnelcount,
                            'medecincountMedecin'=>$medecincountMedecin,

                        ]);

                    default:
                        return view('message');
                }
            } else {
                return view('message');
            }
        } else {
            return redirect()->back();
        }
    }

}
