<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validacion extends FormRequest
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
            'name'=>'required|min:4|max:150',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'role' => 'required|in:atleta,entrenador',// 1 para entrenador y 0 para atleta
            'deporte' => 'required|min:4|max:150', // Requerido si es atleta
            'entrenador' => 'nullable|string|max:255', // Requerido si es atleta
            
        ];
    }
}
