<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;

class AdministradoresController extends Controller
{
    public function index(){
        return view('administradores.index');
    }
    public function create(){
        return view('administradores.create');
    }
    public function estudiantesadmin(){
        $estudiantes = Estudiante::all();
        return view('administradores.estudiantes',compact('estudiantes'));
    }
    public function estudiantesstore(Request $request){
        $estudiante = new Estudiante;
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('administradores.estudiantes');
    }
    public function profesoresadmin(){
        $profesores = Profesor::all();
        return view('administradores.profesores',compact('profesores'));
    }
    public function profesoresstore(Request $request){
        $profesor = new Profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('administradores.profesores');
    }
    
    public function propuestasadmin(){
        $propuestas = Propuesta::with('estudiante')->get();
        $estudiantes = Estudiante::all();
        return view('administradores.propuesta',compact(['propuestas','estudiantes']));
    }
    public function edit(Propuesta $propuesta){
        return view('administradores.edit',compact('propuesta'));
    }
    public function update( Request $request,Propuesta $propuesta){
        $propuesta->estado = $request->estado;
        $propuesta->documento = $propuesta->documento;

        $propuesta->save();
        return redirect()->route('administradores.propuesta');
    }
}
