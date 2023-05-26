@extends('templates.master')
@section('contenidoPrincipal')
    <div class="container p-5">
        <h1 class="text-center text-white">Vista de Administrador</h1>
      <div class="row">
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Gestionar Alumnos</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col text-start " >
                              <a href="{{route('administrador.estudiantes')}}" class="btn btn-secondary">
                                  Alumnos
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Gestionar Profesores</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col" >
                              <a href="{{route('administrador.profesores')}}" class=" btn btn-secondary">
                                  Profesores
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection