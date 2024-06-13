<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;


class AdministrateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'adresse' => 'required|string',
            'age' => 'required|min:20|integer',
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
            'email' => [
                'required',
                'email',
                'unique:users,email',
                function ($attribute, $value, $fail) {
                    // Vérifier si l'e-mail contient des majuscules
                    if (strtolower($value) !== $value) {
                        $fail('L\'adresse e-mail doit être en minuscules.');
                    }
                },
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                // 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W\_])[A-Za-z\d\W\_]+$/',
                'regex:/[a-z]/',      // Au moins une lettre minuscule
                'regex:/[A-Z]/',      // Au moins une lettre majuscule
                'regex:/[0-9]/',      // Au moins un chiffre
                'regex:/[@$!%*?&]/',  // Au moins un caractère spécial
                Rules\Password::defaults(),
            ],
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
