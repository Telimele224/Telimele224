<?php

namespace App\Http\Requests\admin;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class MedecinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'adresse' => 'required|string',
            'age' => 'required|integer',
            'telephone' => ['required', 'regex:/^(\+224|224|00224)?6[1-9]{1}[0-9]{7}$/',

            function ($attribute, $value, $fail) {
                // Supprimer tous les caractères non numériques du numéro de téléphone
                $phoneNumber = preg_replace('/[^0-9]/', '', $value);

                // Vérifier si le numéro de téléphone a au moins 8 chiffres
                if (strlen($phoneNumber) < 9) {
                    $fail('Le numéro de téléphone doit contenir au moins 8 chiffres.');
                }
            }],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email|unique:users,email',
           'password' => [
                'required',
                'string',
                'min:8',              // Au moins 8 caractères
                'regex:/[a-z]/',      // Au moins une lettre minuscule
                'regex:/[A-Z]/',      // Au moins une lettre majuscule
                'regex:/[0-9]/',      // Au moins un chiffre
                'regex:/[@$!%*?&]/',  // Au moins un caractère spécial
                Rules\Password::defaults(),
            ],
            'statut' => 'required|string',
            'specialite' => 'required|string',
            'biographie' => 'string',
            'service_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'telephone.regex' => 'Le numéro de téléphone doit commencer par 6, suivi d\'un chiffre entre 1 et 9 et contenir au total 9 chiffres, avec éventuellement le préfixe 224, +224, ou 00224.',
            'password.regex' => 'Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.',
        ];
    }
}
