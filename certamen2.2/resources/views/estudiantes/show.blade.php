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
                        <th scope="col">Comentario</th>

                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @foreach ($propuestas as $index =>$propuesta)
                        <tr>
                          <th scope="row">{{$index + 1}}</th>
                          <td>{{$propuesta->estudiante_rut}}</td>
                          <td>{{$propuesta->estudiante_rut->nombre}}</td>
                          <td>{{$propuesta->estudiante_rut->apellido}}</td>
                          <td>{{$propuesta->estado}}</td>
                          <td><a href="" class="btn btn-primary ">Revisar Comentario</a></td>

                        </tr> 
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection