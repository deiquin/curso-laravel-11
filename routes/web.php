<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\MaterialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('trabajadors', TrabajadorController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('proyectos', ProyectoController::class);
    Route::resource('materials', MaterialController::class);
});




require __DIR__.'/auth.php';
