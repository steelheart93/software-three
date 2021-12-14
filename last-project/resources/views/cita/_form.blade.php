@csrf
@include('structure.validation-error')
<div class="row p-2">
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="cc" id="cc" placeholder="Cédula del paciente"
            value="{{ old('cc', $cita->cc) }}">
    </div>
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del paciente"
            value="{{ old('nombre', $cita->nombre) }}">
    </div>
</div>
<div class="row p-2">
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="eps" id="eps" placeholder="EPS del paciente"
            value="{{ old('eps', $cita->eps) }}">
    </div>
    <div class="form-group col-md-6">
        <input type="datetime-local" class="form-control" name="fecha_cita" id="fecha_cita"
            placeholder="Fecha de la cita" value="{{ old('fecha_cita', $cita->fecha_cita) }}">
    </div>
</div>
<div class="row p-2">
    <div class="form-group col-md-6">
        <select class="form-control" name="tipo_cita" id="tipo_cita">
            <option value="N/A" disabled selected>Seleccione una opción</option>
            <option value="primera_dosis">Primera Dosis</option>
            <option value="segunda_dosis">Segunda Dosis</option>
            <option value="informativa">Informativa</option>
            <option value="prueba_covid">Prueba COVID</option>
        </select>
    </div>
    <div class="col-md-6 text-center">
        <button type="submit" class="btn btn-success m-2">Aceptar</button>
        <a class="btn btn-danger m-2" href="{{ URL::previous() }}">Cancelar</a>
    </div>
</div>
