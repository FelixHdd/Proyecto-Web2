@extends('templates.master')
@section('contenidoPrincipal')
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                        <h2>Actualizar Estado Propuesta</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('administradores.update',$propuesta->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="nombre-proyecto" class="form-label">Proyecto</label>
                                <input class="form-control" type="text" value="{{$propuesta->documento}}" aria-label="readonly input example" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Seleccione la modificacion de estado que desee</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_ER" value="0" @if($propuesta->estado=='Esperando Revision') checked @endif>
                                    <label class="form-check-label" for="est_ER">
                                        Esperando Revision 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_MP" value="1" @if($propuesta->estado=='Modificar Propuesta') checked @endif>
                                    <label class="form-check-label" for="est_MP">
                                        Modificar Propuesta
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_R" value="2" @if($propuesta->estado=='Rechazado') checked @endif>
                                    <label class="form-check-label" for="est_R">
                                        Rechazado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estado" id="est_A" value="3" @if($propuesta->estado=='Aceptado') checked @endif>
                                    <label class="form-check-label" for="est_A">
                                        Aceptado
                                    </label>    
                                </div>
                                <div class="mt-3 d-grid gap-2 d-lg-block">
                                    <button class="btn btn-primary" type="submit">Editar Propuesta</button>
                                    <a class="btn btn-danger"href="{{route('administradores.propuesta')}}">Salir</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection