<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
    protected $table = 'permisos';

    protected $fillable = [
                    'id',
                    'descripcion',
                    'respuesta',
                    'descripcion_larga',
                    'user_id',
                ];

    public function respuesta(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }

    public function descripcion(): Attribute
    {
        return Attribute::make(
            //get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }

    public function descripcionLarga(): Attribute
    {
        return Attribute::make(
            //get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }
}
