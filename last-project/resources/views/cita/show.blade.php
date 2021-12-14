@extends('master')
@section('content')
    <div class="p-4">
        <div class="form-group my-2">
            <input readonly type="text" class="form-control" name="cc" id="cc" value="{{ old('cedula', $cita->cc) }}">
        </div>
        <div class="form-group my-2">
            <input readonly type="text" class="form-control" name="nombre" id="nombre"
                value="{{ old('nombre', $cita->nombre) }}">
        </div>
        <div class="form-group my-2">
            <input readonly type="text" class="form-control" name="eps" id="eps" value="{{ old('eps', $cita->eps) }}">
        </div>
        <div class="form-group my-2">
            <input readonly type="text" class="form-control" name="fecha_cita" id="fecha_cita"
                value="{{ old('fecha_cita', $cita->fecha_cita) }}">
        </div>
        <div class="form-group my-2">
            <input readonly type="text" class="form-control" name="tipo_cita" id="tipo_cita"
                value="{{ old('tipo_cita', $cita->tipo_cita) }}">
        </div>
        <div class="row p-2">
            <div class="col-md-12 text-center">
                <a class="btn btn-danger m-2" href="{{ URL::previous() }}">Regresar a la vista anterior</a>
            </div>
        </div>
    </div>
@endsection
