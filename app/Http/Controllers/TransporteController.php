<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransporteController extends Controller
{
    //
    public function index() {
        return "este es el index";
    }

    public function inicio($edad, $nombre) {
        //return "este es el nombre :" . $nombre . " y su edad es: " . $edad;
        return view("transporte.inicio", compact("nombre", "edad"));
    }
}
