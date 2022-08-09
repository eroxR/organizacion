<div class="input-group mb-3">
    {{-- @error('nombreArea')
        <span class="invalidad-feedback">
            <strong>message</strong>
        </span>
    @enderror --}}
    <input type="text" class="form-control" placeholder="Nombre del rol" aria-label="Username" name="nombre"
        id="nombre" value="{{ isset($rol->nombre) ? $rol->nombre : '' }}">
    <span class="input-group-text"> </span>
    <p class="msj" id="descripcion_Nrol">Debes seleccionar el nombre del rol</p>

</div>
<button class="btn btn-danger" type="submit">Guardar Información</button>
<a href="{{ url('rol') }}" class="btn btn-danger" type="submit">Cancelar</a>