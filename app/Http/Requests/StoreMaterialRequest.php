<?php

namespace App\Http\Requests;

use App\Enums\EstadoMaterial;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreMaterialRequest extends FormRequest
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
            'nombre' => 'required|string', 
            'cantidad' => 'required|integer', 
            'fecha_ingreso'=> 'required|date', 
            'fecha_caducidad' => 'required|date',
            'estado' => ['required', new Enum(EstadoMaterial::class)],
            'id_proveedor'=> 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'registrar valor', 
            'cantidad.required' => 'registrar valor', 
            'fecha_ingreso.required'=> 'registrar valor', 
            'fecha_caducidad.required' => 'registrar valor',
            'id_proveedor.required'=> 'registrar valor',
        ];
    }
}
