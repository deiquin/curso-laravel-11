<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\EstadoCargo;
use Illuminate\Validation\Rules\Enum;

class UpdateCargoRequest extends FormRequest
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
            'nombre' => 'required',
            'estado' => ['required', new Enum(EstadoCargo::class)],
        ];
    }

        public function messages(): array
    {
        return [
            'nombre.required' => 'debe registrar un valor',
            'estado.required' => 'debe registrar un valor',
        ];
    }
}
