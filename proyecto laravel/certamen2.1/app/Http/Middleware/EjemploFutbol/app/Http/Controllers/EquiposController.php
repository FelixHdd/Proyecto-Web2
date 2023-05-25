<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    public function index(){
        $equipos = Equipo::all();
        // return view('equipos.index',['equipos'=>$equipos]);
        return view('equipos.index',compact('equipos'));
    }

    public function show(Equipo $equipo){
        return view('equipos.show',compact('equipo'));
    }

    public function edit(Equipo $equipo){
        return view('equipos.edit',compact('equipo'));
    }

    public function update(Request $request,Equipo $equipo){
        $equipo->nombre = $request->nombre;
        $equipo->entrenador = $request->entrenador;
        $equipo->save();
        return redirect()->route('equipos.index');
    }

    public function destroy(Equipo $equipo){
        $equipo->delete();
        return redirect()->route('equipos.index');
    }
}
