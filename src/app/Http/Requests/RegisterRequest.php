<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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

//     $this->merge([...])
// C'est une méthode de Laravel. Elle permet de réécrire ou d'ajouter des données dans la requête
    public function prepareForValidation(){
        if($this->phone){
            $this->merge([
                'phone' => str_replace(' ', '', $this->phone)
            ]);
        }
    }


    public function rules(): array
    {
        // On récupère l'ID de l'utilisateur présent dans l'URL
        $user = $this->route('user');
        $user_id = is_object($user) ? $user->id : $user;
        return [
        'name' => 'required|min:6',
        // On demande d'ignorer cet ID spécifique pour la règle unique
        // Ajout de la virgule AVANT le $user_id
        // unique vérifie si l'email est présent , ignore le dit d'ignorer l'id de cet utilisateur s'il est null il ignorera personne 
        'email' => ['required','email',Rule::unique('users')->ignore($user_id),],
        'password' => 'required|min:5|confirmed',
        'role' => 'required|in:teacher,student',
        'age' => 'required|integer|between:18,60',// Pas d'espace après la virgule
        'phone' => 'required|size:10|starts_with:06,07',
        ];
    }

    public function messages(){
        return [
            'phone.starts_with' => 'le numéro de téléphone doit commencer par 06 ou 07',
            'password.confirmed' => 'confirmation de mot de passe invalide',
            'role.in' => 'role invalide(roles: student, teacher)',
            'age.integer' => 'il faut entrer un age valide',
            'age.between' => 'l age doit etre compris entre 18 et 35',
            'email.unique' => 'l email doit etre unique',
            'email.email' => 'email invalide',
            'name.min' => 'le nom doit contenir au moins 6 caractères',
            'password.min' => 'le mot de passe doit contenir au moins 5 caractères',
            'phone.size' => 'le numéro de téléphone doit contenir 10 chiffres',
            'name.required' => 'le nom ne peut pas etre vide',
            'email.required' => 'l email ne peut pas etre vide',
            'password.required' => 'le mot de passe ne peut pas etre vide',
            'role.required' => 'le role ne peut pas etre vide',
            'age.required' => 'l age ne peut pas etre vide',
            'phone.required' => 'le numero de téléphone ne peut pas etre vide',
        ];
    }
}
