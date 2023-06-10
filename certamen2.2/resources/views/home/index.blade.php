@extends('templates.master') 
@section('contenidoPrincipal')
<div class="container p-5"> 
      <div class="row">
          <div class="col-12 col-md-4 d-flex  mb-3">
              <div class="card">
              <h1 class="card-header bg-primary text-white" href="">Estudiante</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">  
                      Bienvenido, alumno,En nuestra plataforma educativa,puedes subir tus propuestas de proyecto y recibir valiosos comentarios de tus profesores.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col " >
                              <a href="{{route('estudiantes.index')}}" class="btn btn-secondary">
                                  Subir Propuesta, Estado Propuesta y Retroalimentacion
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex  mb-3">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Profesor</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                      Como profesor, tendrás acceso a todas las propuestas de informes enviadas por tus alumnos. Podrás revisarlas, realizar comentarios y brindar retroalimentación constructiva, todo en un solo lugar.
                      </p>
                      <div class="row d-flex align-items-center text-center">
                          <div class="col" >
                              <a href="{{route('profesores.index')}}" class=" btn btn-secondary">
                                  Gestionar Propuestas
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex mb-3">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrador</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                      Administra alumnos, profesores y estados de informes de manera sencilla,Simplificando tus tareas de gestión mediante nuestra página                                                                                               
                      </p>
                      <div class="row d-flex align-items-center text-center">
                          <div class="col" >
                              <a href="{{route('administradores.index')}}" class="btn btn-secondary">
                                  Gestionar Alumnos, Profesores y Propuestas
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection