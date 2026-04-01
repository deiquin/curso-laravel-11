<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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
        $proveedorId = $this->route('proveedor')?->id;

        return [
            'nombre'        => 'required|string|max:255',
            'razon_social'  => 'required|string|max:255',
            'edad'          => 'required|integer|min:18|max:120',
            'email'         => 'required|email|unique:proveedores,email,' . $proveedorId,
            'esadmin'       => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'       => 'El nombre es obligatorio',
            'razon_social.required' => 'La razón social es obligatorio',
            'edad.required'         => 'La edad es obligatoria',
            'edad.integer'          => 'La edad debe ser un número',
            'email.required'        => 'El email es obligatorio',
            'email.unique'          => 'El email ya existe',
        ];
    }
}
