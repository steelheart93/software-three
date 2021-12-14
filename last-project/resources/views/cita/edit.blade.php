@extends('master')
@section('content')
    <div class="row p-5">
        <h4 class="pb-3">Editar Cita</h4>
        <form action="{{ route('cita.update', $cita->id) }}" method="POST">
            @method("PUT")
            @include('cita._form')
        </form>
    </div>
@endsection
