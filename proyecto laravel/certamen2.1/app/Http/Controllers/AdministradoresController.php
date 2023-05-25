<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    public function index(){
        return view('administradores.index');
    }
    public function create(){
        return view('administradores.create');
    }
}
