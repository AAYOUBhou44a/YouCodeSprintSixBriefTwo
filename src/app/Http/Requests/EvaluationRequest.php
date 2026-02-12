<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationRequest extends FormRequest
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
            'realisation_id' => 'required|exists:realisations,id',
            'validation' => 'required|array|min:1',
            'validation.*' => 'required|in:valide,invalide',
            'comment' => 'required|string|max:1000'
        ];
    }
    
    public function messages(): array
    {
        return [
            'realisation_id.exists' => 'Le rendu sélectionné est invalide.',
            'validation.required' => 'Vous devez évaluer au moins une compétence.',
            'validation.*.in' => 'Le statut de validation doit être "Acquis" ou "Non acquis".',
            'comment.required' => 'Le feedback pédagogique est obligatoire.',
            'comment.string' => 'Le commentaire doit être une chaîne de caractères.',
            'comment.max' => 'Le commentaire ne peut pas dépasser 1000 caractères.',          
        ];
    }
}
