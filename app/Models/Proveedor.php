<?php

namespace App\Models;

use App\Enums\EstadoProveedor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'razon_social',
        'edad',
        'email',
        'estado',
        'esadmin',
    ];

    protected function casts(): array {
        return [
            'estado' => EstadoProveedor::class,
        ];
    }
}
