<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use App\Http\Requests\StoreTrabajadorRequest;
use App\Http\Requests\UpdateTrabajadorRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Enums\EstadoTrabajador;

use function Pest\Laravel\json;

//use App\Http\Requests\TrabajadorRequest;
//use \Http\Requests\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$trabajadores = Trabajador::paginate(10);
        $trabajadores = Trabajador::select('trabajadores.id', 'trabajadores.nombre', 
                        'cargos.nombre as nombreCargo', 'trabajadores.edad', 
                        'trabajadores.estado', 'proyectos.nombre as nombreProyecto', 'acciones')
                ->leftJoin('cargos', 'trabajadores.id_cargo', '=', 'cargos.id')
                ->leftJoin('proyectos', 'trabajadores.id_proyecto', '=', 'proyectos.id')
                ->where('trabajadores.id', '>=', 1)
                ->paginate(5)->onEachSide(0);
        return view('trabajadores/index', compact('trabajadores'));
        //return response()->json($trabajadores); // para revisar en rutas api
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargos = DB::table('cargos')->where('estado', '=', 'ACT')->get();
        $proyectos = DB::table('proyectos')->where('estado', '=', 'ACT')->get();
        $estados = EstadoTrabajador::cases();

        return view('trabajadores/create', compact('cargos', 'proyectos', 'estados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrabajadorRequest $request)
    {
        
        $request = $request->validated();
        $trabajador = Trabajador::create($request);
        return redirect('trabajadors');
        //return response()->json($trabajador); // para revisar en rutas api
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajador $trabajador)
    {
        $noMostrarBoton = true;
        $cargos = DB::table('cargos')->where('estado', '=', 'ACT')->get();
        $proyectos = DB::table('proyectos')->where('estado', '=', 'ACT')->get();
        $estados = EstadoTrabajador::cases();

        return view('trabajadores/create', 
                    compact('trabajador', 'noMostrarBoton', 'cargos', 'proyectos', 'estados'));
        //return response()->json($trabajador); // para revisar en rutas api
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajador $trabajador)
    {
        $cargos = DB::table('cargos')->where('estado', '=', 'ACT')->get();
        $proyectos = DB::table('proyectos')->where('estado', '=', 'ACT')->get();
        $estados = EstadoTrabajador::cases();

        return view('trabajadores/create', compact('trabajador', 'cargos', 'proyectos', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrabajadorRequest $request, Trabajador $trabajador)
    {
        $request = $request->validated();
        //        return $request;
        $trabajador->update($request);
        return redirect('trabajadors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajador $trabajador)
    {
        // $trabajador->delete();
        // return redirect('trabajadors');
        return response()->json($trabajador->delete());
    }
}
