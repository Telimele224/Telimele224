<?php

namespace App\Http\Controllers\patient\patientpdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\View;
use App\Models\Rdv;
use Carbon\Carbon;
class patientPdf2Controller extends Controller
{
    public function generatepatientpdf()
    {
        // Récupérer tous les rendez-vous
        $rendezvous = Rdv::first(); // Vous pouvez ajuster cela en fonction de votre logique

        // Récupérer les informations du patient associé au rendez-vous
        $patient = $rendezvous->patient->user;

        // Récupérer les informations du médecin associé au rendez-vous
        $medecin = $rendezvous->medecin->user;

        // Numéro d'ordre du rendez-vous
        $orderNumber = $rendezvous->id; // Par exemple, l'ID du rendez-vous comme numéro d'ordre

        // Formatage des informations pour le code QR
        $qrData = "Nom du patient: {$patient->prenom} {$patient->nom}\n";
        $qrData .= "Médecin: {$medecin->prenom} {$medecin->nom}\n";
        $qrData .= "Date du rendez-vous: {$rendezvous->dateRdv}\n";
        $qrData .= "Heure du rendez-vous: {$rendezvous->heure}\n";
        $qrData .= "Numéro d'ordre: {$orderNumber}";

        // Générer le code QR
        $qrCode = QrCode::size(150)->generate($qrData);

        // Générez le HTML de la vue
        $html = View::make('patients.rendez-vous.patientpdf.pdf', compact('patient', 'medecin', 'rendezvous', 'orderNumber', 'qrCode'))->render();

        // Instanciation de Dompdf
        $pdf = new Dompdf();

        // Charger le HTML
        $pdf->loadHtml($html);

        // (Optionnel) Configurer la taille et l'orientation de la page
        $pdf->setPaper('A4', 'portrait');

        // Rendre le PDF
        $pdf->render();

        // Retourne le PDF pour téléchargement
        return $pdf->stream('document.pdf');
    }

}
