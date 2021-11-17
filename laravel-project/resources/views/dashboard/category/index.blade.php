@extends('dashboard.master')
@section('content')
    <div class="mb-3">
        <a class="btn btn-success btn-sm" href="{{ route('post.create') }}">Añadir publicación</a>
    </div>

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
                        <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#myModal" data-id="{{ $post->id }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Seguro que deseas eliminar la publicación?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <form id="formDelete" action="{{ route('post.destroy', 0) }}"
                    data-action="{{ route('post.destroy', 0) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#myModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_post = button.data('id');
            action = $("#formDelete").attr("data-action").slice(0, -1);
            action += id_post;
            $("#formDelete").attr("action", action);
            var modal = $(this)
            modal.find('.modal-title').text('Haz seleccionado la publicación: ' + id_post);
        });
    }
</script>
