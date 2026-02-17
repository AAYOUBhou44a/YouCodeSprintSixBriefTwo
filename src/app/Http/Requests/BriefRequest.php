<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BriefRequest extends FormRequest
{
    protected function prepareForValidation(){
        $this->merge([
            // On injecte le classe_id de l'utilisateur directement dans la requête
            'classe_id' => Auth::user()->classe_id
        ]);
    }
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
        $brief = $this->route('brief');
        $brief_id = is_object($brief) ? $brief->id : $brief;
        return [
        'title' => ['required','min:5','string', Rule::unique('briefs')->ignore($brief_id)],
        'description' => 'required|min:5|string',
        'content' => 'required|string',
        'type' => 'required|in:individuel,collectif',
        'sprint_id' => 'required|integer|exists:sprints,id',
        'classe_id' => 'required|integer|exists:classes,id',
        'start_date' => 'required|date|after_or_equal:today',
        'end_date' => 'required|date|before_or_equal:2026-05-15|after:start_date',
        'skill_ids' => 'required|array|min:1|',
        'skill_ids.*' => 'required|exists:skills,id',
        'level' => 'required|array',
        'level.*' => 'required|in:IMITER,TRANSPOSER,S_ADAPTER'
        // on ne met pas [] chez la validation des tableaux
        ];
    }

    public function messages(): array
    {
        return [
            // Titre
        'title.required' => 'Le titre est obligatoire.',
        'title.unique'   => 'Ce titre de brief existe déjà.',
        'title.min'      => 'Le titre doit contenir au moins 5 caractères.',

        // Champs textes
        'description.required' => 'La description est obligatoire.',
        'description.min'      => 'La description doit être plus détaillée (min 5 caractères).',
        'content.required'     => 'Le contenu détaillé du brief est obligatoire.',

        // Type et Sélections
        'type.required'      => 'Veuillez choisir si le brief est individuel ou collectif.',
        'type.in'            => 'Le type sélectionné est invalide.',
        'sprint_id.required' => 'Vous devez sélectionner un sprint.',
        'sprint_id.exists'   => 'Le sprint sélectionné n\'existe pas.',
        'classe_id.required' => 'Veuillez sélectionner une classe.',
        'classe_id.exists'   => 'La classe sélectionnée est invalide.',

        // Dates
        'start_date.required'       => 'La date de début est obligatoire.',
        'start_date.after_or_equal' => 'Le brief ne peut pas commencer avant aujourd\'hui.',
        'end_date.required'         => 'La date de fin est obligatoire.',
        'end_date.after'            => 'La date de fin doit être après la date de début.',
        'end_date.before_or_equal'  => 'La date de fin ne peut pas dépasser le 15 mai 2026.',

        // Compétences (Tableaux)
        'skill_ids.required' => 'Vous devez sélectionner au moins une compétence.',
        'skill_ids.min'      => 'Veuillez cocher au moins une compétence.',
        'skill_ids.*.exists' => 'Une des compétences sélectionnées est invalide.',
        
        // Niveaux
        'level.*.required' => 'Chaque compétence sélectionnée doit avoir un niveau.',
        'level.*.in'       => 'Le niveau doit être compris entre 1 et 3.',
        ];
    }
}
