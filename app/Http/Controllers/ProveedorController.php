<?php

namespace App\Http\Controllers;

//use App\Enums\EstadoProveedor;

use App\Enums\EstadoProveedor;
use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $proveedors = Proveedor::paginate(10)->onEachSide(0);
        //dd($proveedors);
        return view('proveedors.index', compact('proveedors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = EstadoProveedor::cases();
        return view('proveedors.create', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveedorRequest $request)
    {
        $data = $request->validated();
        Proveedor::create($data);
        return redirect()->route('proveedors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        $noMostrarBoton = true;
        $estados = EstadoProveedor::cases();
        return view('proveedors.create', compact('proveedor', 'noMostrarBoton', 'estados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        $estados = EstadoProveedor::cases();
         return view('proveedors.create', compact('proveedor', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        $data = $request->validated();
        $proveedor->update($data);

        return redirect()->route('proveedors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        // $proveedor->delete();
        // return redirect()->route('proveedors.index');
        return response()->json($proveedor->delete());
    }
}
