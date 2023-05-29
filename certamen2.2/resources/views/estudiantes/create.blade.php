@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Subir Propuesta</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('propuestas.store')}}" >
                    @csrf
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione su Rut</option>
                        <option value="1">Jose Alberto De Las Mercedes</option>
                        <option value="2">Ruben Doblas</option>
                        <option value="3">Elba Zurita</option>
                       <!-- Seleccionar nombre de alumno -->
                    </select>
                    <div class="row  mt-3">
                        <div class="col">
                            <input class="form-control" type="text" value="Nombre" name = "nombre"aria-label="Ejemplo de input de solo lectura" >
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" value="Apellido" name="apellido" aria-label="Ejemplo de input de solo lectura" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input class="form-control" type="file" name="pdf" id="formFile" >
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">
                            Subir Propuesta
                        </button>
                        <button class="btn btn-secondary" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
     </div>
@endSection