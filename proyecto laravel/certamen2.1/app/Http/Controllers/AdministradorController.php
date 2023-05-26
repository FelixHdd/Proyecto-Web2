<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;


class AdministradorController extends Controller
{
    public function index(){
        return view('administrador.index');
    }
    
    public function estudiadmin(){
        return view('administrador.estudiantes');
    }
    public function profesadmin(){
        return view('administrador.profesores');
    }
    public function propuestadmin(){
        return view('administrador.propuesta');
    }

    public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('administrador.estudiadmin');
    }
    
    
    // //public function profedit(){
    //     return view('elnombrequesea2')
    // }

}
