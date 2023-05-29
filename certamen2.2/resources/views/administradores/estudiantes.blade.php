@extends('templates.master')
@section('contenidoPrincipal')


<div class="row pt-4">
  <div class="col-7">
    <div class="card">
      <div class="card-header bg-primary text-white">
        <h2>Listado de Estudiantes</h2>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Rut</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($estudiantes as $index => $estudiante)
              <tr>
                <td class="align-middle">{{$index+1}}</td>
                <td class="align-middle">{{$estudiante->rut}}</td>
                <td class="align-middle">{{$estudiante->nombre}}</td>
                <td class="align-middle">{{$estudiante->apellido}}</td>
                <td class="align-middle">{{$estudiante->email}}</td>
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
        <h2>Agregar Estudiante</h2>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('estudiantes.store')}}">
        @merhod('put')  
        @csrf
          <div class="row">
            <div class="col-4">
              <div class="mb-3">
                <label for="rut" class="form-label">Rut</label>
                  <input type="text" class="form-control" id="rut" name="rut" placeholder="xxxxxxxx-x">
              </div>
            </div>
            <div class="col-8">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com">
              </div>
            </div>
          </div>
                
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control"  id="nombre" name="nombre" >
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control"  id="apellido" name="apellido" >
              </div>
            </div>
            <button class="btn btn-primary" type="submit">
              Agregar Profesor
            </button>
            <button class="btn btn-primary" type="reset">
              Cancelar
            </button>
          </div>
               
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection