@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Ingresar nuevo Comentario</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Seleccione Profesor</option>
                        @foreach($profesores as $index=>$profesor)
                        <option value="{{$profesor->rut}}">{{$profesor->nombre." ".$profesor->apellido}}</option>
                        @endforeach
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Alumno</label>
                                <input class="form-control" type="text" value="#aqui hay problemas" aria-label="readonly input example" readonly>

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nombre-proyecto" class="form-label">Proyecto</label>
                                <input class="form-control" type="text" value="{{$propuesta->documento}}" aria-label="readonly input example" readonly>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-primary" style="float: left;">
                            Guardar Comentario
                            </button>
                        </div>
                <form>
            <div>
        </div>
    </div>
@endSection