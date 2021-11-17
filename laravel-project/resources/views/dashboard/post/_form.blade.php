@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication" placeholder="Nombre publicación"
        value="{{ old('publication', $post->publication) }}">
</div>
<div class="form-group">
    <select name="category_id" id="category_id" aria-label="Default">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category_name => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">
                {{ category_name }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select name="state_publication" id="state_publication" class="form-control">
        <option value="published">Publicado</option>
        <option value="reject">No publicado</option>
        <option value="in_review">En revisión</option>
    </select>
</div>
<div class="form-group">
    <textarea name="content_publication" id="content_publication" cols="30" rows="10" class="form-control">
        {{ old('content_publication', $post->content_publication) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
