<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Propuesta;
use App\Models\Estudiante;




class PropuestasController extends Controller
{
    public function store(Request $request){
        $propuesta = new Propuesta();
        $propuesta->fecha = now();
        $propuesta->estudiante_rut = $request->rut;
        $file = $request->file('pdf');
        $name = $file->getClientOriginalName();
        $file->storeAs('',$name,'public');
        $propuesta->documento = $name;
        $propuesta->estado = "1";
        $propuesta->save();
       
        return redirect()->route('estudiantes.index');
    }
}
