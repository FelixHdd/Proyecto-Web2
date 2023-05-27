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
                        <option value="1">Dagoberto Cabrera</option>
                        <option value="2">Carlos Alten</option>
                    </select>
                    <div class="row mt-3">
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Alumno</option>
                            <option value="1">Pipeño</option>
                            <option value="2">Sackert</option>
                        </select>
                        </div>
                        <div class="col">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Seleccione Propuesta</option>
                            <option value="1">Version 1 </option>
                            <option value="2">Version 5000</option>
                        </select>
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