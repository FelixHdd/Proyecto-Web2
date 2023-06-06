@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Eliminar Comentarios</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Seleccione Profesor</option>
                        @foreach($profesores as $index => $profesor)
                            <option value="1">{{$profesor->nombre}} {{$profesor->apellido}}</option>
                        @endforeach
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Alumno</option>
                            @foreach($estudiantes as $index => $estudiante)
                                <option value="1">{{$estudiante->nombre}} {{$estudiante->apellido}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Propuesta</option>
                            @foreach($propuestas as $index => $propuesta)
                                <option value="1">{{$propuesta->documento}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-primary" style="float: left;" type="submit">
                            Eliminar Comentario
                            </button>
                        </div>
                <form>
            <div>
@endSection