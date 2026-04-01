<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;

class comentarios extends Model
{
    //
    protected $table = 'comentarios';

    protected $fillable = [
        'id',
        'descripcion',
        'user_id',
    ];

    protected function descripcion(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
