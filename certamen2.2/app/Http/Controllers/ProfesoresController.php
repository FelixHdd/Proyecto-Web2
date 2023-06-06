<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\Estudiante;


class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::orderBy('rut')->orderBy('nombre')->get();
        return view('profesores.index',compact('profesores'));
    }
    public function delete(){
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        $propuestas = Propuesta::all();
        return view('profesores.EliminarC',compact('profesores','estudiantes','propuestas'));
    }
    public function add(Propuesta $propuesta){
        $propuesta = Propuesta::all();
        $profesores = Profesor::orderBy('rut')->orderBy('nombre')->get();
        return view('profesores.ingresoC',compact(['propuesta','profesores']));
    }
    public function show(){
        return view('profesores.show');
    }
}
