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
        $profesores = Profesor::orderBy('id')->get();

        return view('profesores.showp',compact(['propuestas','profesores']));
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
    public function destroy($propuesta_id,$profesor_id){
        $profesor = DB::table('profesores')->where('id',$profesor_id)->first();
        $propuesta = DB::table('propuestas')->where('id',$propuesta_id)->first();

        DB::table('profesor_propuesta')->where('propuesta_id',$propuesta->id)->where('profesor_id',$profesor->id)->delete();
        return redirect()->route('profesores.showp');
    }
    
 

}
