@extends('master')
@section('content')

    <div class="row">

        <div class="col-lg-10 m-auto">

            <h3 class="display-4 text-center">Asignar Cita</h3>

            <form action="{{ route('cita.store') }}" method="POST">
                @include('cita._form')
            </form>
        </div>
    </div>
@endsection
