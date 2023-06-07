@php
$estados = [0 => 'Esperando Revision',1=>'Modificar Propuesta',2=>'Rechazado',3=>'Aceptado'];
@endphp
@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Estado Propuesta</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Propuesta</th>
                        <th scope="col">Comentario</th>

                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @foreach ($propuestas as $index =>$propuesta)
                        <tr>
                          <th scope="row">{{$index + 1}}</th>
                          <td>{{$propuesta->estudiante_rut}}</td>
                          <td>{{$propuesta->estudiante->nombre}}</td>
                          <td>{{$propuesta->estudiante->apellido}}</td>
                          <td>{{$estados[$propuesta->estado]}}</td>
                          <td>{{$propuesta->documento}}</td>
                          <td><a href="{{route('profesores.add', $propuesta->id)}}" class="btn btn-primary ">Agregar Comentario</a></td>

                        </tr> 
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection