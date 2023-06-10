@extends('templates.master')
@section('contenidoPrincipal')
<div class="container p-5">
        <h1 class="text-center text-white">Vista de Administrador</h1>
      <div class="row">
          <div class="col-12 col-md-6 d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrar Usuarios</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                      Bienvenido, administrador. Esta sección te brinda el control total sobre el registro de alumnos y profesores. Agrega nuevos usuarios a nuestra base de datos de manera fácil y segura. Mantén actualizada la información, gestionando de forma eficiente la incorporación de alumnos y profesores.
                      </p>
                      <div class="row d-flex align-items-center mt-5">
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
          <div class="col-12 col-md-6 d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Modificar Estado</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill mb-5">
                      Bienvenido, administrador. En esta sección, podrás modificar el estado de revisión de las propuestas ingresadas por los alumnos. Tendrás el control total para actualizar el estado de cada propuesta, ya sea en revisión, aprobada o rechazada.
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