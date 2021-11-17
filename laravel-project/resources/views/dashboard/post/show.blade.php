@extends('dashboard.master')
@section('content')
    <div class="form-group">
        <input type="text" class="form-control" name="publication" id="publication" placeholder="Nombre publicación"
            value="{{ old('publication', $post->publication) }}" readonly>
    </div>
    <div class="form-group">
        <select name="state_publication" id="state_publication" class="form-control" disabled>
            <option value="published">Publicado</option>
            <option value="reject">No publicado</option>
            <option value="in_review">En revisión</option>
        </select>
    </div>
    <div class="form-group">
        <textarea name="content_publication" id="content_publication" cols="30" rows="10" class="form-control" readonly>
            {{ old('content_publication', $post->content_publication) }}
        </textarea>
    </div>
    <a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Regresar</a>
@endsection
