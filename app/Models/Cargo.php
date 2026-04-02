<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EstadoCargo;

class Cargo extends Model
{
    /** @use HasFactory<\Database\Factories\CargoFactory> */
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable = [
        'nombre',
        'estado',
    ];

    protected function casts(): array 
    {
        return [
            'estado' => EstadoCargo::class,
        ];
    }

}
