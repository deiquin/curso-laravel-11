<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    //
    public function index() {
        //$aVendedor = Vendedor::all();
        $aVendedor = Vendedor::paginate(10);
        return view('vendedor.index', compact('aVendedor'));
    }

    public function create() {
        return view('vendedor.create');
    }

    public function store(Request $request) {
        $vendedor = new Vendedor();

        $vendedor->nombre = $request->nombre;
        $vendedor->apellido_paterno = $request->apellido_paterno;
        $vendedor->apellido_materno = $request->apellido_materno;
        $vendedor->email = $request->email;
        $vendedor->edad = $request->edad;

        $vendedor->save();

        return redirect("/vendedor/{$vendedor->nombre}");
        //return redirect("route('vendedor.show', $vendedor)");
    }

    public function show(Vendedor $vendedor) {
        //return $vendedor;

        return view('vendedor.show', compact('vendedor'));
    }

    public function edit(Vendedor $vendedor) {
    
        //$oVendedor = Vendedor::find($idVendedor);

        return view('vendedor.edit', compact('vendedor'));
    }

    public function update(Request $request, Vendedor $vendedor) {
    
        //$vendedor = Vendedor::find($idVendedor);
        
        $vendedor->nombre = $request->nombre;
        $vendedor->apellido_paterno = $request->apellido_paterno;
        $vendedor->apellido_materno = $request->apellido_materno;
        $vendedor->email = $request->email;
        $vendedor->edad = $request->edad;

        $vendedor->save();

         return redirect("/vendedor/{$vendedor->id}");
    }

    public function destroy(Vendedor $vendedor) {
    
        //$oVendedor = Vendedor::find($idVendedor);
        $vendedor->delete();

        return redirect('/vendedor');
    }

}
