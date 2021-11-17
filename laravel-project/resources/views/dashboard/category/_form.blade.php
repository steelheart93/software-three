@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Nombre publicación"
        value="{{ old('category_name', $category->category_name) }}">
</div>
<button type="submit" class="btn btn-success btn-sm">Aceptar</button>
<a class="btn btn-danger btn-sm" href="{{ URL::previous() }}">Cancelar</a>
