@extends('layouts.app')

@section('template_title')
    {{ $dulce->name ?? "{{ __('Show') Dulce" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Dulce</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('dulces.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $dulce->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $dulce->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Informacion:</strong>
                            {{ $dulce->informacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $dulce->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $dulce->img }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
