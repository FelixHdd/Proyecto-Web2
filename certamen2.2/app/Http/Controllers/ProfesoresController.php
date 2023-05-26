<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::orderBy('rut')->orderBy('nombre')->get();
        return view('profesores.index',compact('profesores'));
    }
}
