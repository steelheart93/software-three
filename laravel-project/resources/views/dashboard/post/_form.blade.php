@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication" placeholder="Nombre publicación"
        value="{{ old('publication', $post->publication) }}">
</div>
<div class="form-group">
    <select name="state_publication" id="state_publication" class="form-control">
        <option value="">Publicado</option>
        <option value="">No publicado</option>
        <option value="">En revisión</option>
    </select>
</div>
<div class="form-group">
    <textarea name="content_publication" id="content_publication" cols="30" rows="10" class="form-control">
        {{ old('content_publication', $post->content_publication) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</button>
