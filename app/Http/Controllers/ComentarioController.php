<?php

namespace App\Http\Controllers;

use App\Models\comentarios;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ComentarioController extends Controller
{
    //
    public function crear(): View 
    {
        comentarios::create(['descripcion' => 'ComenTario 11', 'user_id' => 1]);
        $comentario = comentarios::orderBy('id', 'desc')->limit(1)->get();
        
        return view('comentario.crear', compact('comentario'));
    }


    public function index() {
        
        $aComentario = comentarios::all();
        //turn "este  es el listado";
        return view('/comentario/index', compact('aComentario'));
    }

    public function create() {
        return view('/comentario/create');
    }

    public function store(Request $request) {
        $oComentario = new comentarios();

        $oComentario->descripcion = $request->descripcion;
        $oComentario->user_id = 1;

        $oComentario->save();

        $idComentario = $oComentario->id;

        return redirect('/comentario/' . $idComentario);
    }

    public function show($idComentario) {
        $oComentario = comentarios::find($idComentario);

        return view('/comentario/show', compact('oComentario'));
    }

    public function edit($idComentario) {
        $oComentario = comentarios::find($idComentario);

        return view('/comentario/edit', compact('oComentario'));
    }

    public function update(Request $request, $idComentario) {
        $oComentario = comentarios::find($idComentario);

        $oComentario->descripcion = $request->descripcion;

        $oComentario->save();

        return redirect('/comentario/' . $oComentario->id);
    }

    public function destroy($idComentario) {
        $oComentario = comentarios::find($idComentario);

        $oComentario->delete();

        return redirect('/comentario/index');
    }

}
