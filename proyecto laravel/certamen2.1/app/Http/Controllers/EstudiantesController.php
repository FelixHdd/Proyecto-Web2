<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiantes.login');
    }
    public function create(){
        return view('estudiantes.create');
    }
    public function show(){
        return view('estudiantes.show');
    }
}
