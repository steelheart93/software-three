@extends('master')
@section('content')
    <div class="row p-5">
        <h4 class="pb-3">Asignar Cita</h4>
        <form action="{{ route('cita.store') }}" method="POST">
            @include('cita._form')
        </form>
    </div>
@endsection
