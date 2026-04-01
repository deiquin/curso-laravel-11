<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function index() {
        //$aCategoria = categoria::all();
        $aCategoria = categoria::paginate(10);

        return view('categoria.index', compact('aCategoria'));//$aCategoria;
    }

    public function create() {
        //return "aqui se crea el nuevo";
        return view('categoria.create');
    }

    public function store(Request $request) {
        $oCategoria = new categoria();
        $oCategoria->nombre = $request->nombre;
        $oCategoria->slug = $request->slug;
        $oCategoria->save();

        //return "aqui se graba la categoria: " . $oCategoria->id;
        return redirect('categoria/' . $oCategoria->id);
    }

    public function show(categoria $oCategoria) {
            //$oCategoria = categoria::find($id);
        //return "aqui se viaualiza la creación de la nueva categoria";
        return view('categoria.show', compact('oCategoria'));
    }

    public function edit(categoria $oCategoria) {
        //$oCategoria = categoria::find($id);
        //return "se edita la categoria: " . $oCategoria->id;
        return view('categoria.edit', compact('oCategoria'));
    }

    public function update(Request $request, categoria $oCategoria) {
        //$oCategoria = categoria::find($id);

        $oCategoria->nombre = $request->nombre;
        $oCategoria->slug = $request->slug;

        $oCategoria->save();

        return redirect('categoria/' .$oCategoria->id);
    }

    public function destroy(categoria $oCategoria) {
        //$oCategoria = categoria::find($idCategoria);

        $oCategoria->delete();

        return redirect('categoria');
    }
}
