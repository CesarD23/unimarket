<div class="box box-info padding-1">
    <div class="box-body">
        


        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $compra->nombre }}" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $compra->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="nombre">Producto</label>
            <input type="text" id="producto" name="producto" value="{{ $compra->prudcto }}" class="form-control{{ $errors->has('producto') ? ' is-invalid' : '' }}" placeholder="Producto">
            @if ($errors->has('producto'))
                <div class="invalid-feedback">{{ $errors->first('producto') }}</div>
            @endif
        </div>
        <div class="form-group">
            {{ Form::label('informacion') }}
            {{ Form::text('informacion', $compra->informacion, ['class' => 'form-control' . ($errors->has('informacion') ? ' is-invalid' : ''), 'placeholder' => 'Informacion']) }}
            {!! $errors->first('informacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $compra->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('imagen', 'Imagen') }}
            {{ Form::file('imagen', ['class' => 'form-control-file' . ($errors->has('imagen') ? ' is-invalid' : '')]) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <br>
       <center><button type="submit" class="btn btn-primary">{{ __('Subir informacion') }}</button></center> 
    </div>
</div>