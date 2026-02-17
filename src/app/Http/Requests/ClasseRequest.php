<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
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
        $classe = $this->route('classe');
        $classe_id = is_object($classe) ? $classe->id : $classe;
        return [
        'name' => ['required','min:5', Rule::unique('classes')->ignore($classe_id)],
        // ,'exists:users,id'
        'teacher_id' => ['required', Rule::exists('users', 'id')->where('role', 'teacher')],
        'student_ids' => 'required|array|min:1',
        // required : Vérifie que le champ n'est pas vide.
        // Lorsque la règle min est appliquée à un champ qui 
        // est déjà validé comme un array, Laravel vérifie le nombre d'éléments
        //  (la taille) à l'intérieur de ce tableau.
        'student_ids.*' => [ Rule::exists('users', 'id')->where('role', 'student')]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'le nom ne peut pas etre vide',
            'name.min' => 'le nom de la classe doit contenir au moins 5 caractères',
            'teacher_id.required' => 'le choix du formateur est obligatoire',
            'teacher_id.exists' => 'le formateur choisi est introuvable',
            'student_ids.required' => 'il faut choisir des apprenant pour la classe',
            'student_ids.array' => 'les apprenants choisi sont introuvables',
            'student_ids.min' => 'il faut affecter au moins un apprenant pour la classe',
            'student_ids.*.exists' => 'un ou plusiers apprenant choisis sont introuvables',
        ];
    }
}
