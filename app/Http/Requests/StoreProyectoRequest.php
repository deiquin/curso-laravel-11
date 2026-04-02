<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use App\Enums\EstadoProyecto;

class StoreProyectoRequest extends FormRequest
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
            'nombre'        => 'required',
            'fecha_inicio'  => 'required|date|before:fecha_fin',
            'fecha_fin'     => 'required|date|after:fecha_inicio',
            'estado'        => ['required', new Enum(EstadoProyecto::class)]
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'       => 'ingresar un valor',
            'fecha_inicio.required' => 'ingresar un valor',
            'fecha_inicio.date'     => 'ingresar con formato de fecha',
            'fecha_inicio.before'   => 'la fecha debe ser menor a la fecha fin',
            'fecha_fin.required'    => 'ingresar un valor',
            'fecha_fin.date'        => 'ingresar con formato de fecha',
            'fecha_fin.after'       => 'la fecha debe ser mayor a la fecha ini',
            'estado.required'       => 'ingresar un valor',
        ];
    }
}
