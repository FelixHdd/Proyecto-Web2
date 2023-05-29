<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;



class PropuestasController extends Controller
{
    public function store(Request $request){
        $propuesta = new Propuesta();
        $propuesta->fecha = now();
        $propuesta->documento = $request->pdf;
        $propuesta->estado = "1";
        $propuesta->save();
        return redirect()->route('estudiantes.index');
    }
}
