@extends('master')
@section('content')
    <h1 class="pt-2 text-center">Tabla de Datos de Casos Confirmados</h1>

    <div class="row p-4">
        <select class="col-md-4 p-2">
            <option value="-1" disabled>Seleccione una opción</option>
            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento['departamento_nom'] }}">{{ $departamento['departamento_nom'] }}</option>
            @endforeach
        </select>
        <select class="col-md-4 p-2">
            <option value="-1" disabled>Seleccione una opción</option>
            @foreach ($ciudades as $ciudad)
                <option value="{{ $ciudad['ciudad_municipio_nom'] }}">{{ $ciudad['ciudad_municipio_nom'] }}</option>
            @endforeach
        </select>
    </div>

    <div class="row mt-4">
        {{ $datos }}
    </div>
@endsection
