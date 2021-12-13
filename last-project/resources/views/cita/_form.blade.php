@csrf
@include('structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="cc" id="cc" placeholder="Cédula"
        value="{{ old('publication', $cita->cc) }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Usuario"
        value="{{ old('publication', $cita->nombre) }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="eps" id="eps" placeholder="EPS"
        value="{{ old('publication', $cita->eps) }}">
</div>
<div class="form-group">
    <input type="text" class="form-control datepicker" name="fecha_cita" id="fecha_cita" placeholder="Fecha de la Cita"
        value="{{ old('publication', $cita->fecha_cita) }}">
</div>
<div class="form-group">
    <select class="form-control" name="tipo_cita" id="tipo_cita">
        <option value="primera_dosis">Primera Dosis</option>
        <option value="segunda_dosis">Segunda Dosis</option>
        <option value="informativa">Informativa</option>
        <option value="prueba_covid">Prueba COVID</option>
    </select>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>

<script>
    $(function() {
        $('datepicker').datepicker();
    });
</script>
