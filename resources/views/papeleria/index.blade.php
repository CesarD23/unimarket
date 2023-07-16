@extends('layouts.app')

@section('template_title')
    Papeleria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span id="card_title">
                                {{ __('Papeleria') }}
                            </span>

                            <div class="ml-auto">
                                @auth
                                    <a href="{{ route('papelerias.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                                        {{ __('Crear nuevo producto') }}
                                    </a>
                                @endauth
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
                            @foreach ($papelerias as $papeleria)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <center><img src="{{ asset($papeleria->imagen) }}" alt="{{ $papeleria->title }}" class="card-img-top" style="max-width: 300px; height: 300px;"></center>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $papeleria->nombre }}</h5>
                                            <p class="card-text">{{ $papeleria->informacion }}</p>
                                            <p class="card-text">{{ $papeleria->producto }}</p>
                                            <p class="card-text">{{ $papeleria->contacto }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('papelerias.show', $papeleria->id) }}" class="btn btn-primary">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                @auth
                                                    <a href="{{ route('papelerias.edit', $papeleria->id) }}" class="btn btn-success">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                    </a>
                                                    <form action="{{ route('papelerias.destroy', $papeleria->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                        </button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {!! $papelerias->links() !!}
            </div>
        </div>
    </div>
@endsection
