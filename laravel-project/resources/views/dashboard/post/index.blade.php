@extends('dashboard.master')
@section('content')
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Contenido</th>
                <th scope="col">Estado</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->publication }}</td>
                    <td>{{ $post->content_publication }}</td>
                    <td>{{ $post->state_publication }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-info btn-sm">Consultar</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info btn-sm">Editar</a>
                        <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
