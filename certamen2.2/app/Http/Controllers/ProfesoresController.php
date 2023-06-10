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
    public function datos_d(Propuesta $propuesta){
        $proCom = ProfesorPropuesta::orderBy('fecha')->get();
        $profesores = Profesor::All();
        $propuesta = $proCom->where('propuesta_id', $propuesta->id)->first();
        $prof_id = $propuesta->profesor_id;

        $profesor = $profesores->where('id', $prof_id)->first();
        $proId = $propuesta->propuesta_id;
        $propuestaCom = DB::table('profesor_propuesta')->where('propuesta_id',$proId)->where('profesor_id', $profesor->id)->first();
        $propuesta = DB::table('propuestas')->where('id',$proId)->first();
        return view('profesores.datos_d',compact(['profesor','propuesta','propuestaCom']));
    }
    public function add(Propuesta $propuesta){
        $profesores = Profesor::orderBy('id')->orderBy('nombre')->get();
        $rut = $propuesta->estudiante_rut;
        $estudiante = DB::table('estudiantes')->where('rut', $rut)->first();
        // dd($estudiante);
        return view('profesores.create',compact(['estudiante','propuesta','profesores']));
    }
    public function store(Request $request){
        $propuestaProfesor = new ProfesorPropuesta();

        $propuestaProfesor->profesor_id = $request->id;
        $propuestaProfesor->propuesta_id = $request->propuesta_id;
        $propuestaProfesor->fecha = date('Y-m-d');
        $propuestaProfesor->hora = date("H:i:s");
        $propuestaProfesor->comentario = $request->comentario;

       $propuestaProfesor->save();
       
     return redirect()->route('profesores.showp');
    }
    
    
}
