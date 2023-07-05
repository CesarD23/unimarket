@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? "{{ __('Show') Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $compra->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $compra->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Informacion:</strong>
                            {{ $compra->informacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $compra->contacto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
