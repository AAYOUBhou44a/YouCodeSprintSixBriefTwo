<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'email ne peut pas etre vide',
            'email.email' => 'email Invalid',
            'email.exists' => 'email inexistant',
            'password.required' => 'le mot de passe ne peut pas etre vide',
            'password.min' => 'le mot de passe doit contenir au moins 5 caractères'
        ];
    }
}
