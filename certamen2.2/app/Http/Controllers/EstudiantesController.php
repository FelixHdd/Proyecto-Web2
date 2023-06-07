<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::orderBy('rut')->orderBy('nombre')->get();
        return view('estudiantes.index',compact('estudiantes'));
    }
    public function create(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.create',compact('estudiantes'));
    }
    public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }
}
