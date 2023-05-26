<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.index',compact('estudiantes'));
    }
    public function create(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.create',compact('propuestas'));
    }
    public function show(Estudiante $estudiantes){
        return view('estudiantes.show');
    }
}
