@extends('templates.master') 
@section('contenidoPrincipal')
<div class="container p-5"> 
      <div class="row">
          <div class="col d-flex">
              <div class="card">
              <h1 class="card-header bg-primary text-white" href="">Estudiante</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill ">
                          
"Descubre 'Propulso', la plataforma ideal para que los alumnos presenten y revisen sus proyectos de título. Carga tu proyecto, adjunta archivos y establece plazos. Recibe comentarios constructivos, encuentra colaboradores y accede a recursos adicionales. Únete a Propulso y eleva tus propuestas académicas al siguiente nivel."
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
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Profesor</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
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
          <div class="col d-flex">
              <div class="card">
                 <h1 class="card-header bg-primary text-white">Administrador</h1>
                  <div class="card-body d-flex flex-column">
                      <p class="card-text flex-fill">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam officiis quasi accusamus reprehenderit minus voluptate eum similique nesciunt omnis. Expedita doloremque sequi accusantium eligendi consequatur sit unde ipsum ex.
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