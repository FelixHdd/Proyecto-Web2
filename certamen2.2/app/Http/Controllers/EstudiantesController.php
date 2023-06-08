<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use Illuminate\Support\Facades\DB;

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
    public function list(Propuesta $propuesta){
        $proCom = ProfesorPropuesta::orderBy('fecha')->get();
        $profesores = Profesor::All();
        $propuesta_c = $proCom->where('propuesta_id', $propuesta->id)->first();
        $pro_id = $propuesta_c->profesor_id;
        $profesor = $profesores->where('id', $pro_id)->first();
        return view('estudiantes.list', compact('propuesta_c','propuesta','profesor'));
    }
};