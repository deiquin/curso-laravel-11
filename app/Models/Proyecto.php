<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EstadoProyecto;

class Proyecto extends Model
{
    /** @use HasFactory<\Database\Factories\ProyectoFactory> */
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    protected function casts() : array {
        return [
            'estado' => EstadoProyecto::class
        ];
    }
}
