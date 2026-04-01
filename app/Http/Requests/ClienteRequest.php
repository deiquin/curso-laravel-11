<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        $clienteId = $this->route('cliente')?->id;

        return [
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|unique:clientes,email,' . $clienteId,
            'esadmin' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required'  => 'El correo es obligatorio',
            'email.email'     => 'El correo no es válido',
            'email.unique'    => 'Este correo ya existe',
        ];
    }
}
