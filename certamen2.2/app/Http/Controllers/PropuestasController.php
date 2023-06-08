<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Propuesta;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\ProfesorPropuesta;
use Illuminate\Support\Facades\DB;





class PropuestasController extends Controller
{

    public function show(){
        $propuestas = Propuesta::with('estudiante')->get();
        $proCom = DB::table('profesor_propuesta')->first();

        $estudiantes = Estudiante::all();
        return view('estudiantes.show',compact(['propuestas','proCom']));
    }
    public function showp(){
        $propuestas = Propuesta::with('estudiante')->get();
        $estudiantes = Estudiante::all();
        return view('profesores.showp',compact(['propuestas']));
    }

    public function store(Request $request){
        $propuesta = new Propuesta();
        $propuesta->fecha = now();
        $propuesta->estudiante_rut = $request->rut;
        $file = $request->file('pdf');
        $name = $file->getClientOriginalName();
        $file->storeAs('',$name,'public');
        $propuesta->documento = $name;
        $propuesta->estado = "0";
        $propuesta->save();
       
        return redirect()->route('estudiantes.index');
    }
    public function destroy(ProfesorPropuesta $proPro){
        $proPro->delete();
        return redirect()->route('profesores.showp');
    }
    
 

}
