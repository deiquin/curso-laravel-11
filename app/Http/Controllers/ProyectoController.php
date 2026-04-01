<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(5)->onEachSide(0);
        return view('proyectos.index', compact('proyectos'));
        //return response()->json($proyectos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProyectoRequest $request)
    {
        $request = $request->validated();
        Proyecto::create($request);
        return redirect()->route('proyectos.index');
        //return response()->json(Proyecto::create($request));

    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        $noMostrarBoton = true;
        return view('proyectos.create', compact('proyecto', 'noMostrarBoton'));
        //return response()->json($proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.create', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        $request = $request->validated();
        $proyecto->update($request);
        return redirect()->route('proyectos.index');
        //return response()->json($proyecto->update($request));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //$proyecto->delete();
        //return redirect()->route('proyectos.index');
        return response()->json($proyecto->delete());
    }
}
