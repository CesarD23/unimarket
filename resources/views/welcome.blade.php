@extends('layouts.app')

@section('content')
    <header>

    </header>

    <section class="py-5">
        <div class="container">
           <center><h2>Unimarket </h2></center> 
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images_welcome/food-image-1.jpg" class="card-img-top" alt="Food Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Alimentos</h5>
                            <p class="card-text">Alimentos que puedes encontrar en la universidad.</p>
                            <a href='compras/' class="btn btn-primary">Descubrelos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images_welcome/food-image-2.jpg" class="card-img-top" alt="Food Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Dulceria</h5>
                            <p class="card-text">Descripción del alimento 2.</p>
                            <a href='dulces/' class="btn btn-primary">Descubrelos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images_welcome/food-image-3.jpg" class="card-img-top" alt="Food Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Papeleria</h5>
                            <p class="card-text">Descripción del alimento 3.</p>
                            <a href="papelerias/" class="btn btn-primary">Descubrelos</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más tarjetas de alimentos aquí según sea necesario -->
                
            </div>
        </div>
    </section>
@endsection
