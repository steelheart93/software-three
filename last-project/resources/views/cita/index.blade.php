@extends('master')
@section('content')
    <div class="p-4">
        <div class="mb-4">
            <a href="{{ route('cita.create') }}" class="btn btn-success">Asignar cita</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>EPS</th>
                    <th>Fecha de la cita</th>
                    <th>Tipo de cita</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr>
                        <td>{{ $cita->cc }}</td>
                        <td>{{ $cita->nombre }}</td>
                        <td>{{ $cita->eps }}</td>
                        <td>{{ $cita->fecha_cita }}</td>
                        <td>{{ $cita->tipo_cita }}</td>
                        <td>
                            <a href="{{ route('cita.show', $cita->id) }}" class="btn btn-info btn-sm">Consultar</a>
                            <a href="{{ route('cita.edit', $cita->id) }}" class="btn btn-info btn-sm">Editar</a>
                            <form class="d-inline" action="{{ route('cita.destroy', $cita->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $citas->links() }}
        </div>
    </div>
@endsection
