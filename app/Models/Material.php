<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\EstadoMaterial;



class Material extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialFactory> */
    use HasFactory;

    protected $table = 'materiales';

    protected $fillable = [
        'nombre',
        'cantidad',
        'fecha_ingreso',
        'fecha_caducidad',
        'estado',
        'id_proveedor',
    ];

    protected function casts(): array {
        return [
            'estado' => EstadoMaterial::class
        ];
    }
}
