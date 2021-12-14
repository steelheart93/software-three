@extends('dashboard.master')
@section('content')
    <h6>Editar cita</h6>
    <form action="{{ route('cita.update', $cita) }}" method="POST">
        @method("PUT")
        @include('cita._form')
    </form>
@endsection
