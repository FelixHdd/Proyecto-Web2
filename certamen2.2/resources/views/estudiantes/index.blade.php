@extends('templates.master')
@section('contenidoPrincipal')
    <div class="container p-5">
        <h1 class="text-center text-white">Vista de Estudiante</h1>
      <div class="row">
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Subir Propuesta</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                      Bienvenido,en esta seccion podrás subir tu propuesta de proyecto. Utiliza la plataforma para presentar tu trabajo de manera fácil y eficiente.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col text-start " >
                              <a href="{{route('estudiantes.create')}}" class="btn btn-secondary">
                                  Subir Propuesta
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Estado</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                      Bienvenido a la sección de revisión de propuestas,puedes verificar el estado de tus propuestas de proyectos y leer los comentarios valiosos de tus profesores.Aprovecha los comentarios constructivos para mejorar tus propuestas.
                      </p>
                      <div class="row d-flex align-items-center">
                          <div class="col" >
                              <a href="{{route('estudiantes.show')}}" class=" btn btn-secondary">
                                  Estado Propuesta
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
    </div>
@endsection