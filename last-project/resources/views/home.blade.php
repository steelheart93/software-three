@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('InfoCOVID') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @auth
                            Te damos la bienvenida, <b>{{ auth()->user()->name . '.' }}</b>
                        @endauth
                        <br><br>
                        <a href="{{ route('about') }}" class="btn btn-secondary">Ir al Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
