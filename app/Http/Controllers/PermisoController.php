<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;

class PermisoController extends Controller
{
    //
    public function listar()
    {
        $permiso = Permiso::find(1);

        return $permiso->descripcion;
    }

     public function crear()
    {
        $permiso = Permiso::create(['descripcion' => 'INGRESO TardIO 3','respuesta' => 'rechAzAdo','descripcion_larga' => 'INGRESO TardIO 3 desde largo','user_id' => 1]);

        return $permiso->descripcion_larga;
    }
}
