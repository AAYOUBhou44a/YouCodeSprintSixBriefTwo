<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintRequest extends FormRequest
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
        $sprint_id = $this->route('sprint')->id;
        return [
        'name' => 'required|min:5|unique:sprints,name,' . $sprint_id,
        'start_date' => 'required|date|after_or_equal:today|before_or_equal:2026-05-15',
        'end_date' => 'required|date|after:start_date|before_or_equal:2026-05-15'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'le nom ne peut pas etre vide',
            'name.unique' => 'le nom de sprint déja utilisé',
            'name.min' => 'le nom du sprint doit contenir au moins 5 caractères',
            'start_date.required' => 'la date de début ne peut pas etre vide',
            'start_date.date' => 'la date entré est invalide',
            'start_date.after_or_equal' => 'la date de début ne peut pas etre dans le passé',
            'start_date.before_or_equal' => 'la date de début ne peut pas etre après 2026-05-15',
            'end_date.required' => 'la date de la fin ne peut pas etre vide',
            'end_date.date' => 'la date entré est invlaide',
            'end_date.after' => 'la date de fin ne peut pas etre avant la date début',
            'end_date.before_or_equal' => 'la date de fin ne peut pas etre après 2026-05-15',
        ];
    }
}
