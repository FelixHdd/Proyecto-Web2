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
                  <tr>
                    <th scope="row">1</th>
                    <td>9325473-5</td>
                    <td>Dagoberto</td>
                    <td>Cabrera</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>11436982-6</td>
                    <td>Carlos</td>
                    <td>Alten</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
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
              <form action="">
                <div class="mb-3">
                  <label for="rut" class="form-label">Rut</label>
                  <input type="text" class="form-control" id="rut" placeholder="xxxxxxxx-x">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="apellido" placeholder="">
                    </div>
                  </div>
                  <button class="btn btn-primary">
                    Agregar Profesor
                  </button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>9325473-5</td>
                    <td>Falencio</td>
                    <td>Mentira</td>
                    <td>Falencio.mentira@usm.cl</td>

                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>11436982-6</td>
                    <td>Leonel</td>
                    <td>Messi</td>
                    <td>MessiDiosdelMundo@God.com</td>

                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>17345876-5</td>
                    <td>Erling</td>
                    <td>Halland</td>
                    <td>RobotHalland@usm.cl</td>
                  </tr>
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
              <form action="">
                <div class="row">
                  <div class="col-4">
                    <div class="mb-3">
                      <label for="rut" class="form-label">Rut</label>
                      <input type="text" class="form-control" id="rut" placeholder="xxxxxxxx-x">
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="ejemplo@gmail.com">
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                      <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="apellido" placeholder="">
                    </div>
                  </div>
                 
                  <button class="btn btn-primary">
                    Agregar Profesor
                  </button>
                </div>
               
              </form>
            </div>
          </div>
        </div>
       </div>
     </div>
@endsection