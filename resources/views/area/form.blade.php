<div class="input-group mb-3">
    {{-- @error('nombreArea')
        <span class="invalidad-feedback">
            <strong>message</strong>
        </span>
    @enderror --}}
    <input type="text" class="form-control" placeholder="Nombre del area" aria-label="Username" name="nombreArea"
        id="nombreArea" value="{{ isset($area->nombre) ? $area->nombre : '' }}">
    <span class="input-group-text"> </span>
    <p class="msj" id="descripcion_Narea">Debes seleccionar el nombre del area</p>

</div>
<button class="btn btn-danger" type="submit">Guardar Información</button>
<a href="{{ url('area') }}" class="btn btn-danger" type="submit">Cancelar</a>
