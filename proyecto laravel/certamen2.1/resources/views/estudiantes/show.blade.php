@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Estado Propuesta</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rut</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Comentario</th>

                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>23456123-6</td>
                        <td>Jose</td>
                        <td>Alvarado</td>
                        <td>Rechazado</td>
                        <td><a href="" class="btn btn-primary ">Revisar Comentario</a></td>

                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>21763063-4</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Aprobado</td>
                        <td><a href="" class="btn btn-primary ">Revisar Comentario</a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>21763063-4</td>
                        <td>Josue</td>
                        <td>Roberson</td>
                        <td>Esperando Revision</td>
                        <td>No hay comentario</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection