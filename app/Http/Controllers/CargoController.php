<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Http\Requests\StoreCargoRequest;
use App\Http\Requests\UpdateCargoRequest;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = Cargo::paginate(4)->onEachSide(0);
        return view('cargos/index', compact('cargos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargos/create');
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
        return view('cargos.create', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.create', compact('cargo'));
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
