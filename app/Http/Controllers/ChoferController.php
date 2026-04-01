<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Strings;
use App\Models\Chofer;
use App\Models\User;

class ChoferController extends Controller
{
    //
    public function crear() {
/*         $chofer = Chofer::create(['nombre' => 'luis', 
                                'apellido_paterno' => 'FERnANndez', 
                                'apellido_materno' => 'salazar', 
                                'user_id' => 1]); */

        //$chofer = Chofer::where('user_id', 1)->orderBy('id', 'desc')->first();
        //$chofer = "se creó el chofer";

        //return view('chofer/crear', compact('chofer'));
        return view('chofer/crear');
        //return $chofer;
        //return "listado de choferes desde web.php";
    }


    public function store(Request $request) {
        //return request()->nombre;
        $chofer = new Chofer();

        $chofer->nombre           = $request->nombre;
        $chofer->apellido_paterno = $request->apellido_paterno;
        $chofer->apellido_materno = $request->apellido_materno;
        $chofer->user_id          = 1;

        $chofer->save();

        return redirect('/chofer/listar');
    }

    public function listar()
    {

        //$aChofer = Chofer::select('nombre', 'id')->get();
        //$aChofer = Chofer::find(7);
        //$aChofer = Chofer::get();
        $aChofer = Chofer::paginate(10);

        //$aChofer = Chofer::where('id', 7)->get();
        //$chofer = $chofer->user->name;
        //$chofer = $chofer->apellido_paterno;

        
        //se actualiza el registro
        //$aChofer->save();


        return view('chofer.listar', compact('aChofer'));

        // $user = User::find(37);

        // return $user->chofer->nombre;

    }

    public function mostrar(Chofer $idChofer){

        $aChofer = Chofer::find($idChofer);

        return $aChofer;

        //return view('chofer.mostrar', compact('aChofer'));
    }

    public function editar($idChofer){
        $aChofer = Chofer::find($idChofer);

        return view('chofer.editar', compact('aChofer'));
    }

    
    public function update(Request $request, $idChofer){
        //$idChofer = $request->idChofer;

        $aChofer = Chofer::find($idChofer);

        $aChofer->nombre           = $request->nombre;
        $aChofer->apellido_paterno = $request->apellido_paterno;
        $aChofer->apellido_materno = $request->apellido_materno;

        $aChofer->save();

        return redirect('chofer/' . $idChofer) ;
    }

        public function destroy($idChofer) {
        //$idChofer = $request->idChofer;

        $aChofer = Chofer::find($idChofer);

        $aChofer->delete();

        return redirect('chofer/listar') ;
    }

    public function prueba($hh = null, $variable = null) : string{
        //$mensaje = is_null($hh) ? "hola prueba " : "hola prueba " . $hh ;
        $mensaje = $hh ?? "hola prueba sin variable";
        return $mensaje;
    }
}
