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
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Compra') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('compras.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre</th>
                                        <th>Producto</th>
                                        <th>Informacion</th>
                                        <th>Contacto</th>
                                        <th>Imagen</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compras as $compra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $compra->nombre }}</td>
                                            <td>{{ $compra->producto }}</td>
                                            <td>{{ $compra->informacion }}</td>
                                            <td>{{ $compra->contacto }}</td>
                                            <td>
                                             <img src="{{asset($compra->imagen)}}" alt="{{$compra->title}}" class="img-fluid" width="150px">
                                            </td>
                                            <td>
                                                <form action="{{ route('compras.destroy', $compra->id) }}" method="POST" >
                                                    <a class="btn btn-sm btn-primary" href="{{ route('compras.show', $compra->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                    </a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compras.edit', $compra->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $compras->links() !!}
            </div>
        </div>
    </div>
@endsection
