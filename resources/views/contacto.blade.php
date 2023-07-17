@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="contact_form">
            <div class="formulario">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/contact-form.css') }}">
                <h1>¿Quieres contratarnos?</h1>
                <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
                <form action="{{ route('contacto.store') }}" method="post">
                    @csrf
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                    </p>
                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                    </p>
                    <p>
                        <label for="telefono" class="colocar_telefono">Teléfono
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="tel" name="telefono" id="telefono" required="obligatorio" placeholder="Escribe tu teléfono">
                    </p>
                    <p>
                        <label for="asunto" class="colocar_asunto">Asunto
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="asunto" id="asunto" required="obligatorio" placeholder="Escribe un asunto">
                    </p>
                    <button type="submit" name="store" id="enviar"><p>Enviar</p></button>
                    <p class="aviso">
                        <span class="obligatorio">*</span> Los campos son obligatorios.
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
