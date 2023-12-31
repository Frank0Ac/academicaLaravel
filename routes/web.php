<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Academica\FacultadesController;
use App\Http\Controllers\Academica\ProgramasController;
use App\Http\Controllers\Academica\DocentesController;
use App\Http\Controllers\Academica\EstudiantesController;
use App\Http\Controllers\Academica\MateriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas facultades
Route::get('/facultades/listado', [FacultadesController::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_facultades');

// Rutas programas
Route::get('/programas/listado', [ProgramasController::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_programas');

// Rutas docentes
Route::get('/docentes/listado', [DocentesController::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_docentes');

// Rutas estudiantes
Route::get('/estudiantes/listado', [EstudiantesController::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

// Rutas materias
Route::get('/materias/listado', [MateriasController::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_materias');

require __DIR__.'/auth.php';
