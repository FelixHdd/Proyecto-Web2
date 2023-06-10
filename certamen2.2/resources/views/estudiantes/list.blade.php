@extends('templates.master')
@section('contenidoPrincipal')
<div class="container-flex p-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Comentario Propuesta</h2>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="nombre" class="form-label">Profesor</label>
                                <input class="form-control" type="text"  value="{{$profesor->nombre}} {{$profesor->apellido}}" aria-label="readonly input example" readonly>
                            </div>
                            <div class="col">

                                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                                <input class="form-control" type="text"  value="{{$propuesta_c->fecha}}" aria-label="readonly input example" readonly>
                            </div>
                        </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"readonly>{{$propuesta_c->comentario}}</textarea >
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection