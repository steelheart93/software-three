@extends('master')
@section('content')
<h6>Actualiza tus datos con confianza</h6>
<form action="http://localhost:8000/update/{{$cita->id}}" method="POST">
        <div class="form-group my-2">
            <input  type="text" class="form-control" name="cedula" id="cedula"
                placeholder="Cédula" value="{{old('cedula',$cita->cc)}}">
        </div>
        <div class="form-group my-2">
            <input  type="text" class="form-control" name="nombre" id="nombre"
                placeholder="Nombre Usuario" value="{{old('nombre',$cita->nombre)}}">
        </div>

        <div class="form-group my-2">
            <input  type="text" class="form-control" name="eps" id="eps"
                placeholder="EPS" value="{{old('eps',$cita->eps)}}">
        </div>
        <div class="form-group my-2">
            <input  type="text" class="form-control" name="fecha_cita" id="fecha_cita"
                placeholder="Fecha Cita" value="{{old('fecha_cita',$cita->fecha_cita)}}">
        </div>

        <div class="form-group my-4">
            <select  class="form-control" name="choices" id="choices">
                <option value="1">primera dosis</option>
                <option value="2">segunda dosis</option>
                <option value="3">informativa</option>
                <option value="4">prueba covid</option>
            </select>
        </div>
            <div class="col-lg-12 m-auto">
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a class="btn btn-danger" href="{{ route('quotes.update',$cita->id) }}">prueba</a>
                    <a class="btn btn-danger" href="{{ route('quotes.index') }}">atras</a>
                </div>

            </div>
            @method('PUT')
</form>
@endsection
