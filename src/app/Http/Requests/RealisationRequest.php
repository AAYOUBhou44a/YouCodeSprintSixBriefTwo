<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class RealisationRequest extends FormRequest
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
    protected function prepareForValidation(){
        $this->merge([
            'student_id' => Auth::id(),
            'status' => 'nonEvaluated',

        ]);
    }

    public function rules(): array
    {
        return [
            'brief_id' => 'required|exists:briefs,id',
            'student_id' => 'required|exists:users,id',
            'link' => 'required|url|starts_with:https://github.com/',
            'commentaire' => 'nullable|string|max:500',
            'status' => 'required|in:evaluated,nonEvaluated'
        ];
    }

    public function messages(): array
    {
        return [
            'brief_id.required'   => 'Le projet référencé est introuvable.',
            'brief_id.exists'     => 'Le projet sélectionné n\'existe pas dans notre base.',
            'student_id.required' => 'Votre session utilisateur est invalide.',
            
            // Lien GitHub
            'github_link.required'    => 'Le lien GitHub est obligatoire pour valider le brief.',
            'github_link.url'         => 'Le format du lien est invalide (doit commencer par http/https).',
            'github_link.starts_with' => 'Vous devez fournir un lien provenant de github.com (ex: https://github.com/...).',
            
            // Commentaire & Statut
            'comment.max'    => 'Votre note au formateur ne doit pas dépasser 500 caractères.',
            'status.required' => 'Le statut de la réalisation est manquant.',
            'status.in'       => 'Le statut sélectionné est invalide.',
        ];
    }
}
