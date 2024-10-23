<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nom_Société' => 'required|string|max:255|unique:clients,Nom_Société',
            'abreviation' => 'required|string|max:50|unique:clients,abreviation',
            'Telephone' => 'required|string|max:10|unique:clients,Telephone',
            'Cellulaire' => 'required|string|max:10|unique:clients,Cellulaire',
            'Email' => 'nullable|email|unique:clients,Email',
            'Compte_contribuable' => 'required|string|size:9|regex:/^\d{7}-[A-Z]$/|unique:clients,Compte_contribuable',
            'RCCM' => 'nullable|string|unique:clients,RCCM',
            'Direction_1_Nom_et_Prenoms' => 'required|string|max:255',
            'Direction_1_Contact' => 'required|string',
            'Direction_2_Nom_et_Prenoms' => 'nullable|string|max:255',
            'Direction_2_Contact' => 'nullable|string',
            'Direction_3_Nom_et_Prenoms' => 'nullable|string|max:255',
            'Direction_3_Contact' => 'nullable|string',
            'Adresse' => 'required|string|max:255',
            'Commune' => 'required|string|max:255',
            'Quartier' => 'required|string|max:255',
            'Rue' => 'required|string|max:255',
            'Zone' => 'required|string|max:255',
            'Autre' => 'nullable|string|max:255',
        ];
    }

    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'Nom_Société.unique' => 'Le nom de la société est déjà utilisé.',
            'abreviation.unique' => 'L\'abréviation est déjà utilisée.',
            'Telephone.unique' => 'Le numéro de téléphone est déjà utilisé.',
            'Cellulaire.unique' => 'Le numéro de cellulaire est déjà utilisé.',
            'Email.unique' => 'L\'email est déjà utilisé.',
            'Compte_contribuable.regex' => 'Le compte contribuable doit être constitué de 7 chiffres, suivi d\'un tiret et d\'une lettre majuscule (ex: 1234567-A).',
            'Compte_contribuable.unique' => 'Le compte contribuable est déjà utilisé.',
            'RCCM.unique' => 'Le RCCM est déjà utilisé.',
        ];
    }
}
