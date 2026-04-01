<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    //
    public function index (): String {
    	$users = User::paginate(10);

    	return view('user.index', compact('users'));
    	//$nombrexx = "luis";
    	//return "aqui se muestra el listado de los usuarios";
    	// return response()->json([
    	// 	"status" => true,
    	// 	"nombre" => "juan"
    	// ]);
    	//return view('user.index', ['nombre' => $nombrexx]);
    }

    public function show($user) {
    	$user = User::find($user);

    	return view('user.show', ['user' => $user]);
    }
}
