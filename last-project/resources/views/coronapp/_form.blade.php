@csrf
@include('structure.validation-error')
<div class="form-group my-2">
    <input type="text" class="form-control" name="cedula" id="cedula"
        placeholder="Cédula" value="">
</div>
<div class="form-group my-2">
    <input type="text" class="form-control" name="nombre" id="nombre"
        placeholder="Nombre Usuario" value="">
</div>

<div class="form-group my-2">
    <input type="text" class="form-control" name="eps" id="eps"
        placeholder="EPS" value="">
</div>
<div class="form-group my-2">
    <input type="text" class="form-control" name="fecha_cita" id="fecha_cita"
        placeholder="Fecha Cita" value="">
</div>

<div class="form-group my-4">
    <select class="form-control" name="choices" id="choices">
        <option value="1">primera dosis</option>
        <option value="2">segunda dosis</option>
        <option value="3">informativa</option>
        <option value="4">prueba covid</option>
    </select>
</div>
    <div class="col-lg-12 m-auto">
        <div class="text-center">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a class="btn btn-danger" href="/">atras</a>
        </div>

    </div>
