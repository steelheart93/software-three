@extends('master')
@section('content')

    <div class="mb-3">
        <a href="{{ route('cita.create') }}" class="btn btn-success btn-small mb-3">asignar cita</a>
    </div>
    <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>Código</th>
                <th>cedula</th>
                <th>nombre</th>
                <th>eps</th>
                <th>fecha</th>
                <th>tipo de cita</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cita as $citas)
                <tr>
                    <td>{{ $citas->id }}</td>
                    <td>{{ $citas->cc }}</td>
                    <td>{{ $citas->nombre }}</td>
                    <td>{{ $citas->eps }}</td>
                    <td>{{ $citas->fecha_cita }}</td>
                    <td>{{ $citas->tipo_cita }}</td>
                    <td>
                        <a href="http://localhost:8000/show/<?= $citas->id ?>" class="btn btn-success btn-sm">Consultar</a>
                        <a href="http://localhost:8000/edit/<?= $citas->id ?>" class="btn btn-info btn-sm">Editar</a>
                        <a href="http://localhost:8000/destroy/<?= $citas->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
