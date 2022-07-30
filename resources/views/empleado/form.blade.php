<div class="input-group mb-3">
    @error('nombre')
        <span class="invalidad-feedback">
            <strong>message</strong>
        </span>
    @enderror
    <input type="text" class="form-control" placeholder="Nombre Completo" aria-label="Username" name="nombre"
        value="{{ isset($empleado->nombre) ? $empleado->nombre : '' }}">
    <span class="input-group-text"> </span>
    @error('email')
        <span class="invalidad-feedback">
            <strong>message</strong>
        </span>
    @enderror
    <input type="email" class="form-control" placeholder="Correo Electronico" aria-label="Server" name="email"
        value="{{ isset($empleado->email) ? $empleado->email : '' }}">
</div>
<div class="mb-3">
    <label for="recipient-name" class="col-form-label">sexo:</label>
    <div class="">
        <span class="">
            <input name="sex" type="radio" value="M"
                @if (isset($empleado->sexo)) @if ($empleado->sexo == 'M') checked @endif @endif

            >
        </span>
        <br>
        <span class="">
            <input name="sex" type="radio" value="F"
                @if (isset($empleado->sexo)) @if ($empleado->sexo == 'F') checked @endif @endif
            >

        </span>
        @error('sex')
            <span class="invalidad-feedback">
                <strong>message</strong>
            </span>
        @enderror
    </div>
</div>
<div class="mb-3">
    <label for="recipient-name" class="col-form-label">Area:</label>
    <select name="area" id="" value="">
        @foreach ($areas as $area)
            <option @if (isset($empleado->area_id)) @if ($empleado->area_id == $area->id)
            selected @endif
                @endif
                value="{{ $area->id }}">{{ $area->nombre }}</option>
        @endforeach
    </select>
    @error('area')
        <span class="invalidad-feedback">
            <strong>message</strong>
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="message-text" class="col-form-label">Descripción:</label>
    <textarea class="form-control" id="message-text" name="descripcion" value="">{{ isset($empleado->descripcion) ? $empleado->descripcion : '' }}</textarea>
</div>
<span class="input-group-text">
    <input type="checkbox" class="form-check-input mt-0" name="boletin" value="1" aria-label=""
        @if (isset($empleado->boletin)) @if ($empleado->boletin == 1)
    checked @endif @endif>
    <span>deseo
        recibir voletin</span>
</span>

<div class="mb-3">
    <label for="recipient-name" class="col-form-label">Rol:</label>
    <br>
    @foreach ($roles as $rol)
        {{-- <span class="input-group-text"> --}}
        <input type="checkbox" class="form-check-input mt-0" name="rol[]" value="{{ $rol->id }}"
            @if (isset($rolesactual)) @foreach ($rolesactual as $rolactual) @if ($rol->id == $rolactual->roles_id) @checked(true) @endif
            @endforeach
    @endif
    aria-label="">
    <span>{{ $rol->nombre }}</span>


    {{-- </span> --}}
    <br>
    @endforeach

    @error('rol')
        <span class="invalidad-feedback">
            message
        </span>
    @enderror

</div>
<button class="btn btn-danger" type="submit">Guardar Información</button>
<a href="{{ url('empleado') }}" class="btn btn-danger" type="submit">Cancelar</a>
