<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Http\Requests\StoreCargoRequest;
use App\Http\Requests\UpdateCargoRequest;
use App\Enums\EstadoCargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::paginate(4)->onEachSide(0);
        $estados = EstadoCargo::cases();
        return view('cargos/index', compact('cargos', 'estados'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = EstadoCargo::cases();
        return view('cargos/create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCargoRequest $request)
    {
        $request = $request->validated();
        Cargo::create($request);
        return redirect('cargos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        $noMostrarBoton = true;
        $estados = EstadoCargo::cases();
        return view('cargos.create', compact('cargo', 'estados', 'noMostrarBoton'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        $estados = EstadoCargo::cases();
        return view('cargos.create', compact('cargo', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCargoRequest $request, Cargo $cargo)
    {
        $request = $request->validated();
        $cargo->update($request);
        return redirect('cargos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cargo $cargo)
    {
        // $cargo->delete();
        // return redirect('cargos');
        return response()->json($cargo->delete());
    }
}
