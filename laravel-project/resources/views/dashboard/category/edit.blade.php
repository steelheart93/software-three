@extends('dashboard.master')
@section('content')
    <h6>Editar categoría</h6>
    <form action="{{ route('category.update', $category) }}" method="POST">
        @method("PUT")
        @include('dashboard.category._form')
    </form>
@endsection
