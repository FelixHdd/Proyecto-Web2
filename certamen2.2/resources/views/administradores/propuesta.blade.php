@php
$estados = [0 => 'Esperando Revision',1=>'Modificar Propuesta',2=>'Rechazado',3=>'Aceptado'];
@endphp
@extends('templates.master')
@section('contenidoPrincipal')
<div class="row pt-4">
    <div class="col-5">
        <div class="container">
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

                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        @foreach ($propuestas as $index =>$propuesta)
                        <tr>
                            <th scope="row">{{$index + 1}}</th>
                            <td>{{$propuesta->estudiante_rut}}</td>
                            <td>{{$propuesta->estudiante->nombre}}</td>
                            <td>{{$propuesta->estudiante->apellido}}</td>
                            <td>{{$estados[$propuesta->estado]}}</td>
                            </tr> 
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
            <h2>Actualizar Estado Propuesta</h2>
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('administradores.update')}}">
            @method('put')
            @csrf
            <select name="rut" class="form-select mb-3" aria-label="Default select example">
                <option selected>Seleccione su Nombre</option>
                @foreach($estudiantes as $index => $estudiante)
                <option value="{{$estudiante->rut}}">{{$estudiante->nombre}} {{$estudiante->apellido}}</option>
                @endforeach
            </select>
            <select name="estudiante_rut" class="form-select mb-3" aria-label="Default select example">
                <option selected>Estado</option>
                @foreach($propuestas as $propuesta)
                    <option value="{{$propuesta->estudiante_rut}}">{{$propuesta->documento}}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label class="form-label">Estado</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="est_ER" value="Esperando Revision" @if($propuesta->estado=='Esperando Revision') checked @endif>
                    <label class="form-check-label" for="est_ER">
                        Esperando Revision 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="est_MP" value="Modificar Propuesta" @if($propuesta->estado=='Modificar Propuesta') checked @endif>
                    <label class="form-check-label" for="est_MP">
                        Modificar Propuesta
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="est_R" value="Rechazado" @if($propuesta->estado=='Rechazado') checked @endif>
                    <label class="form-check-label" for="est_R">
                        Rechazado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="est_A" value="Aceptado" @if($propuesta->estado=='Aceptado') checked @endif>
                    <label class="form-check-label" for="est_A">
                        Aceptado
                    </label>    
                </div>
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button class="btn btn-primary" type="reset">Cancelar</button>
                    <button class="btn btn-secondary" type="submit">Editar Propuesta</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection