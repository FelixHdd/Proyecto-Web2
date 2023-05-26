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
                                <input type="text" class="form-control" id="nombre" placeholder="" disabled>
                            </div>
                            <div class="col">

                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" disabled>
                            </div>
                        </div>  
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Comenterio</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"disabled></textarea >
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection