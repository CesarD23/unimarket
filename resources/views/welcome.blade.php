@extends('layouts.app')

@section('content')
    <header>
        <!-- Menú -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Mi Sitio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menú</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='login'>Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href='register'>Registro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="py-5">
        <div class="container">
            <h2>Alimentos y Comida</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/1689167107-1.png" class="card-img-top" alt="Food Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Alimentos</h5>
                            <p class="card-text">Descripción del alimento 1.</p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="path/to/food-image-2.jpg" class="card-img-top" alt="Food Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Dulceria</h5>
                            <p class="card-text">Descripción del alimento 2.</p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="path/to/food-image-3.jpg" class="card-img-top" alt="Food Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Papeleria</h5>
                            <p class="card-text">Descripción del alimento 3.</p>
                            <a href="#" class="btn btn-primary">Detalles</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más tarjetas de alimentos aquí según sea necesario -->
            </div>
        </div>
    </section>
@endsection