<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\Estudiante;
use App\Models\ProfesorPropuesta;
use Illuminate\Support\Facades\DB;



class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::orderBy('id')->orderBy('nombre')->get();
        return view('profesores.index',compact('profesores'));
    }
    public function delete(){
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        $propuestas = Propuesta::all();
        return view('profesores.EliminarC',compact('profesores','estudiantes','propuestas'));
    }
    public function add(Propuesta $propuesta){
        $profesores = Profesor::orderBy('id')->orderBy('nombre')->get();
        $rut = $propuesta->estudiante_rut;
        $estudiante = DB::table('estudiantes')->where('rut', $rut)->first();
        // dd($estudiante);
        return view('profesores.ingresoC',compact(['estudiante','propuesta','profesores']));
    }
    public function store(Request $request){
        $propuestaProfesor = new ProfesorPropuesta();

        $propuestaProfesor->profesor_id = $request->id;
        $propuestaProfesor->propuesta_id = $request->propuesta_id;
        $propuestaProfesor->fecha = date('Y-m-d');
        $propuestaProfesor->hora = date("H:i:s");
        $propuestaProfesor->comentario = $request->comentario;

       $propuestaProfesor->save();
       
     return redirect()->route('estudiantes.index');
    }
    
}
