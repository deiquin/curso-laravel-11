<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = Mensaje::paginate(9);
        return view('mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Mensaje::create($request->only('titulo', 'contenido'));

        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensaje $mensaje)
    {
        $noMostrarBoton = true;
        return view('mensajes.create', compact('mensaje', 'noMostrarBoton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensaje $mensaje)
    {
        return view('mensajes.create', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);
        
        $mensaje->update($request->only('titulo', 'contenido'));

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();

        return redirect()->route('mensajes.index');
    }
}
