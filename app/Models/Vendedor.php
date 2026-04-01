<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;
    //
    protected $table = "vendedores";

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'email',
        'edad',
    ];
/*
    protected $id = "";
    protected $nombre = "";
    protected $apellido_paterno = ""; 
    protected $apellido_materno = ""; 
    protected $email = ""; 
    protected $edad = ""; */

    // public function getRouteKeyName()
    // {
    //     return 'nombre';
    // } 
}
