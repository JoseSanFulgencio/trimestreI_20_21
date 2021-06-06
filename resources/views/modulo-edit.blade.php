@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar Modulo
         </div>
         <div class="card-body" style="padding:30px">

            <form action="/modulos" method="POST">

            	{{method_field('PUT')}}

            	@csrf

            	<input type="hidden" name="idRegistro" value="{{$registro->id}}">

            <div class="form-group">
               <label for="nombre">Nombre</label>
               <input type="text" name="nombreRegistro" id="nombre" class="form-control" value="{{$registro->nombre}}">
            </div>

            <div class="form-group">
               <label for="especialidad">Especialidad</label>
               <input type="text" name="especialidadRegistro" id="especialidad" class="form-control" value="{{$registro->especialidad_id}}">
            </div>

            <div class="form-group">
               <label for="ciclo">Ciclo</label>
               <input type="text" name="cicloRegistro" id="ciclo" class="form-control" value="{{$registro->ciclo_id}}">
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar Modulo
               </button>
            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@stop