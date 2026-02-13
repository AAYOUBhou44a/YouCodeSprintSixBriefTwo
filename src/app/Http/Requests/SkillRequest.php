<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SkillRequest extends FormRequest
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
        $skill = $this->route('skill');
        $skill_id = is_object($skill) ? $skill->id : $skill;

        return [
        'code' => ['required','between:2,3','starts_with:C',Rule::unique('skills')->ignore($skill_id)],
        // Pour simuler "min_words:2", on vérifie s'il y a au moins un espace
        // 'regex:/^\s*\S+(?:\s+\S+)+\s*$/'
        // size attend un nombre précis (ex: size:2). Pour une plage, on utilise between:2,3.
        'title' => ['required','min:5',Rule::unique('skills')->ignore($skill_id)]
        ];
    }

    public function messages(): array 
    {
        return [
            'title.required' => 'le titre de la compétence ne peut pas etre vide',
            'title.unique' => 'le titre est déja utilisé',
            'title.min' => 'le titre doit contenir au moins 5 caractères',
            'code.required' => 'le code de la compétence ne peut pas etre vide',
            'code.between' => 'la taille du code doit etre comprise entre 2 et 3 chiffres',
            'code.starts_with' => 'le code doit commencer par C (Compétence)',
            'code.unique' => 'le code est déja utilisé',
        ];
    }
}
