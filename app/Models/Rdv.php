<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    protected $fillable = ['id_patient','id_medecin','dateRdv','heure','jour','statut'];

    public function patient(){
        return $this->belongsTo(Patient::class,'id_patient');
    }

    public function patients()
    {
        return $this->belongsTo(User::class, 'id_patient');
    }

    public function medecin(){
        return $this->belongsTo(Medecin::class,'id_medecin');
    }

    public function consultations(){
        return $this->hasMany(Consultation::class);
    }

      // Méthode pour obtenir le numéro d'ordre
      public function getOrderNumber()
      {
          $appointments = self::where('dateRdv', $this->dateRdv)
                              ->where('id_medecin', $this->id_medecin)
                              ->orderBy('heure')
                              ->get();

          foreach ($appointments as $index => $appointment) {
              if ($appointment->id == $this->id) {
                  return $index + 1;
              }
          }

          return null;
      }

}
