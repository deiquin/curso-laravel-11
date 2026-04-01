<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EstadoTrabajador;

class Trabajador extends Model
{
    /** @use HasFactory<\Database\Factories\TrabajadorFactory> */
    use HasFactory;

    protected $table = 'trabajadores';

    protected $fillable = [
                    'nombre',
                    'edad',
                    'acciones',
                    'estado',
                    'id_cargo',
                    'id_proyecto',
    ];

    // protected function casts(): array
    // {
    //     return [
    //         'estado' => EstadoTrabajador::class,
    //     ];
    // }

    protected $casts = [
        'estado' => EstadoTrabajador::class,
    ];
}
