@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
      <div class="row">
        <div class="col-7">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h2>Listado de Profesores</h2>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($profesores as $index => $profesor)
                    <tr>
                      <td class="align-middle">{{$index+1}}</td>
                      <td class="align-middle">{{$profesor->rut}}</td>
                      <td class="align-middle">{{$profesor->nombre}}</td>
                      <td class="align-middle">{{$profesor->apellido}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h2>Agregar Profesor</h2>
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('profesores.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="rut" class="form-label">Rut</label>
                  <input type="text" class="form-control" id="rut" name="rut" placeholder="xxxxxxxx-x">
                </div>

                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control"  id="nombre" name="nombre" >
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control"  id="apellido" name="apellido" >
                  </div>
                </div>

                </div>
                  <button class="btn btn-primary" type="reset">
                    Cancelar
                  </button>
                  <button class="btn btn-primary" type="submit">
                    Agregar Profesor
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection