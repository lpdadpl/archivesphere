<!-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/layouts/contact.blade.php -->
@extends('app')

@section('title', 'Contacto')

@section('content')
    @include('components.Header')

    <div class="contact-container" style="padding: 2rem;">
        <h1 style="text-align: center; color: #0056b3;">Contáctanos</h1>
        <p style="text-align: center; margin-bottom: 2rem;">
            Si tienes alguna pregunta o necesitas ayuda, no dudes en contactarnos.
        </p>

        <form action="{{ route('contact.submit') }}" method="POST" style="max-width: 600px; margin: 0 auto;">
            @csrf
            <div style="margin-bottom: 1rem;">
                <label for="name" style="display: block; font-weight: bold;">Nombre</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="email" style="display: block; font-weight: bold;">Correo Electrónico</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="message" style="display: block; font-weight: bold;">Mensaje</label>
                <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>

            <button type="submit" style="background-color: #0056b3; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 5px; cursor: pointer;">
                Enviar
            </button>
        </form>
    </div>

    @include('components.Footer')
@endsection
