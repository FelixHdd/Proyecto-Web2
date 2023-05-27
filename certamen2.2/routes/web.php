<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ProfesoresController;


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

//rutas estudiantes
Route::get('/estudiantes',[EstudiantesController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/propuesta',[EstudiantesController::class,'create'])->name('estudiantes.create');



//rutas administradores
Route::get('/administradores',[AdministradoresController::class,'index'])->name('administradores.index');
Route::get('/administradores/profesores',[AdministradoresController::class,'profesoresadmin'])->name('administradores.profesores');
Route::get('/administradores/estudiantes',[AdministradoresController::class,'estudiantesadmin'])->name('administradores.estudiantes');
Route::post('/administradores/profesores',[AdministradoresController::class,'profesoresstore'])->name('profesores.store');
Route::post('/administradores/estudiantes',[AdministradoresController::class,'estudiantesstore'])->name('estudiantes.store');


//rutas profesores
Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::get('/profesores/borrar',[ProfesoresController::class,'delete'])->name('profesores.delete');
Route::get('/profesores/agregar',[ProfesoresController::class,'add'])->name('profesores.add');

