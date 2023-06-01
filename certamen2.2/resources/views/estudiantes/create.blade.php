@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Subir Propuesta</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('propuestas.store')}}" enctype="multipart/form-data">
                    @csrf
                    <select name="rut" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccione su Nombre</option>
                        @foreach($estudiantes as $index => $estudiante)
                        <option value="{{$estudiante->rut}}">{{$estudiante->nombre}}</option>
                        @endforeach
                       <!-- Seleccionar nombre de alumno -->
                    </select>

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