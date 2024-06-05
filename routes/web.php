<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\LeccionesMatematicasController;
use App\Http\Controllers\Matematica1_1Controller;
use App\Http\Controllers\LeccionesCienciasController;
use App\Http\Controllers\Ciencias1_1Controller;
use App\Http\Controllers\LeccionesSocialesController;
use App\Http\Controllers\Sociales1_1Controller;
use App\Http\Controllers\LeccionesLenguajeController;
use App\Http\Controllers\Lenguaje1_1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'Inicio']);

Route::get('/Registro', [RegistroController::class, 'registro'])->name('registro');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');


Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/Materias', [MateriasController::class, 'materias'])->name('materias')->middleware('auth');


Route::get('/LeccionesMatematicas', [LeccionesMatematicasController::class, 'leccionesmatematicas'])->name('leccionesmatematicas')->middleware('auth');

Route::get('/Matematica1_1', [Matematica1_1Controller::class, 'matematica1_1'])->name('matematica1_1')->middleware('auth');

Route::get('/LeccionesCiencias', [LeccionesCienciasController::class, 'leccionesciencias'])->name('leccionesciencias')->middleware('auth');

Route::get('/Ciencias1_1', [Ciencias1_1Controller::class, 'ciencias1_1'])->name('ciencias1_1')->middleware('auth');

Route::get('/LeccionesSociales', [LeccionesSocialesController::class, 'leccionessociales'])->name('leccionessociales')->middleware('auth');

Route::get('/Sociales', [Sociales1_1Controller::class, 'sociales1_1'])->name('sociales1_1')->middleware('auth');

Route::get('/LeccionesLenguaje', [LeccionesLenguajeController::class, 'leccioneslenguaje'])->name('leccioneslenguaje')->middleware('auth');

Route::get('/Lenguaje1_1', [Lenguaje1_1Controller::class, 'lenguaje1_1'])->name('lenguaje1_1')->middleware('auth');