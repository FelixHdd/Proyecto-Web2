<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\AdministradoresController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//ruta de inicio
Route::get('/',[HomeController::class,'index'])->name('home.index');

//rutas de estudiantes(tiene las 3 opciones 'la vista index es la principal de la opcion estudiante)
Route::resource('/estudiantes',EstudiantesController::class)->parameter('estudiantes','estudiante');

Route::resource('/administradores',AdministradoresController::class)->parameter('administradores','administrador');

