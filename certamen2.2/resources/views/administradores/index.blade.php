@extends('templates.master')
@section('contenidoPrincipal')
<div class="container p-5">
        <h1 class="text-center text-white">Vista de Administrador</h1>
      <div class="row">
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrar Usuarios</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col text-start " >
                              <a href="{{route('administradores.estudiantes')}}" class="btn btn-secondary">
                              Administrar Estudiantes
                              </a>
                          </div>
                          <div class="col text-start " >
                              <a href="{{route('administradores.profesores')}}" class="btn btn-secondary">
                              Administrar Profesores
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Modificar Estado Proyectos</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col" >
                              <a href="{{route('administradores.propuesta')}}" class=" btn btn-secondary">
                                  Modificar Estado Propuesta
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection