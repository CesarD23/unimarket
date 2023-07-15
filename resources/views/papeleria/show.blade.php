@extends('layouts.app')

@section('template_title')
    {{ $papeleria->name ?? "{{ __('Show') Papeleria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Papeleria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('papelerias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $papeleria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $papeleria->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Informacion:</strong>
                            {{ $papeleria->informacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $papeleria->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $papeleria->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
