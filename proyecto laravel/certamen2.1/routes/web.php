<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
<<<<<<< Updated upstream
use App\Http\Controllers\AdministradoresController;

=======
use App\Http\Controllers\AdministradorController;
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
Route::resource('/administradores',AdministradoresController::class)->parameter('administradores','administrador');
=======
//rutas administrador
Route::get('/admin',[AdministradorController::class,'index'])->name('administrador.index');
Route::get('/admin/estudiantes',[AdministradorController::class,'estudiadmin'])->name('administrador.estudiantes');
Route::get('/admin/profesores',[AdministradorController::class,'profesadmin'])->name('administrador.profesores');
Route::get('/admin/propuesta',[AdministradorController::class,'propuestadmin'])->name('administrador.propuesta');

>>>>>>> Stashed changes

