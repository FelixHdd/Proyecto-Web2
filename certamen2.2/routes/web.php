<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\PropuestasController;
use App\Models\Propuesta;

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

//rutas estudiantes (ESTO ESTA LISTO)
Route::get('/estudiantes',[EstudiantesController::class,'index'])->name('estudiantes.index');
Route::get('/estudiantes/propuesta',[EstudiantesController::class,'create'])->name('estudiantes.create');
Route::get('/estudiantes/estado',[PropuestasController::class,'show'])->name('estudiantes.show');
Route::get('/estudiantes/estado/{propuesta}',[EstudiantesController::class,'list'])->name('estudiantes.list');

//rutas administradores (Esto esta listo/ No duplicar Rutas)
Route::get('/administradores',[AdministradoresController::class,'index'])->name('administradores.index');
Route::get('/administradores/profesores',[AdministradoresController::class,'profesoresadmin'])->name('administradores.profesores');
Route::get('/administradores/estudiantes',[AdministradoresController::class,'estudiantesadmin'])->name('administradores.estudiantes');
Route::post('/administradores/profesores',[AdministradoresController::class,'profesoresstore'])->name('profesores.store');
Route::post('/administradores/estudiantes',[AdministradoresController::class,'estudiantesstore'])->name('estudiantes.store');
Route::get('/administradores/propuesta',[AdministradoresController::class,'propuestasadmin'])->name('administradores.propuesta');
Route::put('/administradores/editar/{propuesta}',[AdministradoresController::class,'update'])->name('administradores.update');
Route::get('/administradores/editar/{propuesta}',[AdministradoresController::class,'edit'])->name('administradores.edit');


//rutas profesores
Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::get('/profesores/propuesta',[PropuestasController::class,'showp'])->name('profesores.showp');
Route::get('/profesores/propuesta/{propuesta}',[ProfesoresController::class,'add'])->name('profesores.add');
Route::Post('/profesores/propuesta',[ProfesoresController::class,'store'])->name('profesores.store');
Route::get('/profesores/borrar/{propuesta}',[ProfesoresController::class,'datos_d'])->name('profesores.datos_d');
Route::get('/profesores/borrar/{propuesta_id}/{profesor_id}',[PropuestasController::class,'destroy'])->name('profesores.destroy');


//Rutas Propuestas
Route::post('/estudiantes/propuesta',[PropuestasController::class,'store'])->name('propuestas.store');

//ruta profesor/propuesta

