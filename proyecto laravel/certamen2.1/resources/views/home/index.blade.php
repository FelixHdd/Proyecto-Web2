@extends('templates.master') 
@section('contenidoPrincipal')
<div class="container p-5"> 
      <div class="row">
          <div class="col d-flex">
              <div class="card">
              <h1 class="card-header bg-primary text-white" href="{{route('estudiantes.index')}}">Estudiante</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col-4 text-start " >
                              <a href="" class="btn btn-secondary">
                                  Subir Propuesta
                              </a>
                          </div>
                          <div class="col-4 text-center">
                              <a href="" class="btn btn-secondary">Estado Propuesta</a>
                          </div>
                          <div class="col-4 text-center">
                              <a href="" class="btn btn-secondary">Comentarios Propuesta</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Profesor</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col" >
                              <a href="" class=" btn btn-secondary">
                                  Gestionar Propuestas
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrador</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col-6 text-start " >
                              <a href="{{route('administrador.estudiantes')}}" class="btn btn-secondary">
                                  Gestionar Alumnos
                              </a>
                          </div>
                          <div class="col-6 text-center">
                              <a href="{{route('administrador.profesores')}}" class="btn btn-secondary">
                                  Gestionar Profesores
                              </a>
                          </div>
                          <div class="col-6 text-end">
                            <a href="{{route('administrador.propuesta')}}" class="btn btn-secondary">
                                Gestionar Propuesta
                            </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection