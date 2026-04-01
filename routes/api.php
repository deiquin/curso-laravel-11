<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\ProyectoController;

Route::apiResource('trabajadors', TrabajadorController::class);

Route::apiResource('proyectos', ProyectoController::class);