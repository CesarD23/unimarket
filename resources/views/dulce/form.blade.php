<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $dulce->nombre }}" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        
        <div class="form-group">
            <label for="producto">Área</label>
            <input type="text" id="producto" name="producto" value="{{ $dulce->producto }}" class="form-control{{ $errors->has('producto') ? ' is-invalid' : '' }}" placeholder="Área">
            @if ($errors->has('producto'))
                <div class="invalid-feedback">{{ $errors->first('producto') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="informacion">Información</label>
            <input type="text" id="informacion" name="informacion" value="{{ $dulce->informacion }}" class="form-control{{ $errors->has('informacion') ? ' is-invalid' : '' }}" placeholder="Información">
            @if ($errors->has('informacion'))
                <div class="invalid-feedback">{{ $errors->first('informacion') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" id="contacto" name="contacto" value="{{ $dulce->contacto }}" class="form-control{{ $errors->has('contacto') ? ' is-invalid' : '' }}" placeholder="Contacto">
            @if ($errors->has('contacto'))
                <div class="invalid-feedback">{{ $errors->first('contacto') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" name="imagen" class="form-control-file{{ $errors->has('imagen') ? ' is-invalid' : '' }}">
            @if ($errors->has('imagen'))
                <div class="invalid-feedback">{{ $errors->first('imagen') }}</div>
            @endif
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
        <center><button type="submit" class="btn btn-primary">{{ __('Subir información') }}</button></center> 
    </div>
</div>
