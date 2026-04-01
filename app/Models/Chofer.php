<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chofer extends Model
{
    //
    use HasFactory;

    protected $table = 'choferes';

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'user_id',
    ];

    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => strtolower($value),
            get: fn(string $value) => ucfirst($value),
        );
    }

    protected function apellidoPaterno(): Attribute
    {
        return Attribute::make(
            set: fn(string $value) => strtolower($value),
            get: fn(string $value) => ucfirst($value),
            // set: function($value){
            //     return strtolower($value);
            // },
            // get: function($value){
            //     return ucfirst($value);
            // }
        );
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
