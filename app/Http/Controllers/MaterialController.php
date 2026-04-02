<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Enums\EstadoMaterial;
use App\Models\Proveedor;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$materiales = Material::paginate('4');
        $materiales = Material::leftJoin('proveedores', 'proveedores.id', '=', 'materiales.id_proveedor')
        ->select(   'materiales.id', 'materiales.id_proveedor', 'materiales.nombre', 'materiales.cantidad', 
                    'proveedores.nombre as nombreProveedor', 'materiales.estado as estado',
                    'materiales.fecha_ingreso', 'materiales.fecha_caducidad')
        ->paginate(4);
        return view('materiales.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::where('estado', '=', 'ACT')->get();
        $estados = EstadoMaterial::cases();
        return view('materiales.create', compact('estados', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaterialRequest $request)
    {
        $request = $request->validated();
        Material::create($request);
        return redirect()->route('materials.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        $noMostrarBoton = true;
        $estados = EstadoMaterial::cases();
        return view('materiales.create', compact('material', 'noMostrarBoton', 'estados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        $estados = EstadoMaterial::cases();
        return view('materiales.create', compact('material', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        $request = $request->validated();
        $material->update($request);
        return redirect()->route('materials.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        return response()->json($material->delete());
    }
}
