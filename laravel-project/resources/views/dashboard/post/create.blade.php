@extends('dashboard.master')
@section('content')
    <h6>Crear publicación</h6>
    <form action="{{ route('post.store') }}" method="POST">
        @include('dashboard.post._form')
    </form>
@endsection
