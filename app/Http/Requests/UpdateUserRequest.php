<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|max:250|min:2',
            'email' => 'required|unique:users,email,'.$this->user->id
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Desbes escribir un nombre',
            'name.min' => 'El nombre debe tener al menos 2 caracteres',
            'name.max' => 'El nombre debe tener como máximo 250 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.unique' => 'El correo electrónico ingresado ya existe'
        ];
    }
}
