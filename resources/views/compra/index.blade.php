@extends('layouts.app')

@section('template_title')
    Compra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span id="card_title">
                                {{ __('Compra') }}
                            </span>

                            <div class="ml-auto">
                                <a href="{{ route('compras.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                                  {{ __('Crear nuevo producto') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="row">
                            @foreach ($compras as $compra)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset($compra->imagen) }}" alt="{{ $compra->title }}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $compra->nombre }}</h5>
                                            <p class="card-text">{{ $compra->producto }}</p>
                                            <p class="card-text">{{ $compra->informacion }}</p>
                                            <p class="card-text">{{ $compra->contacto }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('compras.show', $compra->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a href="{{ route('compras.edit', $compra->id) }}" class="btn btn-success">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                <form action="{{ route('compras.destroy', $compra->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $compras->links() !!}
            </div>
        </div>
    </div>
@endsection
