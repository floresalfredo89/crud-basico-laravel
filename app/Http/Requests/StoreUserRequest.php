<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'password' => 'required|min:4|max:20|confirmed'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debes escribir un nombre',
            'name.min' => 'El nombre debe tener al menos 2 caracteres',
            'name.max' => 'El nombre debe tener como máximo 250 caracteres',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.unique' => 'El correo electrónico ingresado ya existe',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe de ser de al menos 4 caracteres',
            'password.max' => 'La contraseña debe tener un tamaño máximo de 20 caracteres'
        ];
    }
}
